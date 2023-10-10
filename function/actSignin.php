<?php

    include "../conn.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $saltKeys = 'A%^&*as';
      
      if (isset($_SESSION['login_attempts']) && $_SESSION['login_attempts'] >= 3) {
        $lockout_duration = 300; 
        if (time() - $_SESSION['last_login_attempt_time'] < $lockout_duration) {
            header('Location: '.$host.'signin.php?status=account_locked');
            exit();
        } else {
            unset($_SESSION['login_attempts']);
            unset($_SESSION['last_login_attempt_time']);
        }
    }

    $email = mysqli_real_escape_string($conn, $email);

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

    $result = $conn->query($sql);

        $sql = "SELECT * FROM users where email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                if (password_verify($password.$saltKeys, $row['password'])) {
                    session_start();
                    @$_SESSION["id"] = $row['id'];
                    @$_SESSION["fullname"] = $row['fullname'];
                    @$_SESSION['tipe'] = 'users';

                    header('Location: '.$host.'profile.php');
                } else {
                    header('Location: '.$host.'signin.php?status=failed' );
                }
            }
        } else {
            header('Location: '.$host.'signin.php?status=failed' );
        }
?>