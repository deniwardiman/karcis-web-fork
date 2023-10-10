<?php
    @session_start();
    
    $id = @$_SESSION['id'];
   
    if(!$id){
        header('Location:'.$host.'signin.php');
        exit;
    }

    // get data user
    $user = "SELECT user_profile.*,users.email FROM user_profile LEFT JOIN users ON users.id = user_profile.id_user WHERE user_profile.id_user = $id";

    $user_result = $conn->query($user);

    $user_profile = mysqli_fetch_assoc($user_result);

?>