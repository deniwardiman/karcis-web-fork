<?php
include "../conn.php";

@session_start();

$id = @$_SESSION['id'];

if(!$id){
    header('location:'.$host.'signin.php');
}
if ($_POST['password'] != $_POST['re_password']) {
    header('location:'.$host.'changePassword.php?status=failedTidakSama');
    exit;
}
if (checkPassword($_POST['password']) == 'kurang') {
    header('location:'.$host.'changePassword.php?status=failedKurang');
    exit;
}
if (checkPassword($_POST['password']) == 'besar') {
    header('location:'.$host.'changePassword.php?status=failedBesar');
    exit;
}
if (checkPassword($_POST['password']) == 'kecil') {
    header('location:'.$host.'changePassword.php?status=failedKecil');
    exit;
}
if (checkPassword($_POST['password']) == 'angka') {
    header('location:'.$host.'changePassword.php?status=failedAngka');
    exit;
}
if (checkPassword($_POST['password']) == 'symbol') {
    header('location:'.$host.'changePassword.php?status=failedSymbol');
    exit;
}

$sqlSelectUsers = "select * from users where id = $id";
$connSelectUsers = $conn->query($sqlSelectUsers);
if ($connSelectUsers->num_rows > 0) {
    $data = $connSelectUsers->fetch_assoc();
    if (password_verify($_POST['password'].$saltKeys, $data['password'])) {
        header('location:'.$host.'changePassword.php?status=failedSama');
        exit;
    }
    if (!password_verify($_POST['old_password'].$saltKeys, $data['password'])) {
        header('location:'.$host.'changePassword.php?status=failedTidakSamaDatabase');
        exit;
    }
} else {
    header('location:'.$host.'changePassword.php?status=failed');
    exit;
}

$password = password_hash($_POST['password'].$saltKeys, PASSWORD_BCRYPT);
// update data
$user = "UPDATE users SET password = '$password' WHERE id = $id";
$conn->query($user);

if($conn->query($user) === FALSE){
    echo("Error description: " . mysqli_error($conn));
}

header('Location: '.$host.'changePassword.php?status=success');


function checkPassword($password){
    if (strlen($password) < 9) {
        return "kurang";
    }
    if (!hasUpperCase($password)) {
        return "besar";
    }
    if (!hasLowerCase($password)) {
        return "kecil";
    }
    if (!hasDigit($password)) {
        return "angka";
    }
    if (!hasSymbol($password)){
        return "symbol";
    }
}

function hasUpperCase($str) {
    return preg_match('/[A-Z]/', $str) ? true : false;
}

function hasLowerCase($str) {
    return preg_match('/[a-z]/', $str) ? true : false;
}


function hasDigit($str) {
    return preg_match('/\d/', $str) ? true : false;
}

function hasSymbol($str) {
    return preg_match('/[^A-Za-z0-9]/', $str) ? true : false;
}