<?php
    include "../conn.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['fullname']) || empty($_POST['email']) || empty($_POST['password'])) {
            header('location:'.$host.'signup.php?status=failed');
            return;
        }

        $fullname = htmlentities($_POST['fullname']);
        $fullname = mysqli_real_escape_string($conn, $fullname);
        $email    = htmlentities($_POST['email']);
        $email = mysqli_real_escape_string($conn, $email);
//        $password  = sha1($_POST['password']);
        $password  = password_hash($_POST['password'].$saltKeys, PASSWORD_BCRYPT);

        // check user
        try {

            $sql_select = "SELECT email from users where email = '$email' ";
            $result = $conn->query($sql_select);
            if ($result->num_rows > 0) {
                header('location:'.$host.'signup.php?status=failed');
            } else {
                // insert to database
                $sql_insert = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

                if ($conn->query($sql_insert) === TRUE) {
                    $sql_profile = "INSERT INTO user_profile (id_user,fullname) VALUES ('$conn->insert_id','$fullname')";
                    if($conn->query($sql_profile) === TRUE){
                        header('location:'.$host.'signin.php?status=success');
                    } else {
                        echo("Error description: " . mysqli_error($conn));
                    }
                }
            }

            $conn->close();
        } catch (Exception $e) {
            echo json_encode($e->getMessage());
            header('location:'.$host.'signup.php?status=failed');
        }
    } else {
        header('location:'.$host.'signup.php?status=failed');
    }

?>

