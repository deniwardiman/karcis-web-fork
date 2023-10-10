<?php

    include "../conn.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (isset($_SESSION['login_attempts']) && $_SESSION['login_attempts'] >= 3) {
            $lockout_duration = 300;
            if (time() - $_SESSION['last_login_attempt_time'] < $lockout_duration) {
                header('Location: ' . $host . 'signin.php?status=account_locked');
                exit();
            } else {
                unset($_SESSION['login_attempts']);
                unset($_SESSION['last_login_attempt_time']);
            }
        }

        $email = mysqli_real_escape_string($conn, $email);
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                if (password_verify($password . $saltKeys, $row['password'])) {
                    $id_user = $row['id'];
                    $sql_profile = "SELECT * FROM user_profile WHERE id_user = '$id_user'";
                    $result_profile = $conn->query($sql_profile);
                    $result_profile = $result_profile->fetch_assoc();

                    session_start();
                    @$_SESSION["id"] = $row['id'];
                    @$_SESSION["fullname"] = $result_profile['fullname'];
                    @$_SESSION['tipe'] = 'users';

                    header('Location: ' . $host . 'profile.php');
                } else {
                    header('Location: ' . $host . 'signin.php?status=failed');
                }
            }
        } else {
            header('Location: ' . $host . 'signin.php?status=failed');
        }
    }
?>