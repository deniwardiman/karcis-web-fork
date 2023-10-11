<?php
    include "../conn.php";

    $email = htmlentities(@$_POST['email']);
    $hash = sha1($email.$saltKeys);
    $link = $host."resetPassword.php?hash=".$hash;

    $email = mysqli_real_escape_string($conn, $email);

    $sql_check = "select * from users where email = '$email'";
    $conn_sql_check = $conn->query($sql_check);
    if ($conn_sql_check->num_rows > 0) {
        $sql = "INSERT INTO forgot_password (email, hash, link) VALUES ('$email', '$hash', '$link')";
        if ($conn->query($sql) === TRUE) {
            header('location:'.$host.'confirmation.php?hash='.$hash);
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        header('location:'.$host.'forgotPassword.php?status=failedEmail');
    }

?>