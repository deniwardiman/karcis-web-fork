<?php

    include "../conn.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $saltKeys = 'A%^&*as';

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
        $conn->close();
    } else {
        header('Location: '.$host.'signin.php?status=failed' );
    }



?>