<?php
session_start();
include 'functions/methods.php';

$username = filter_var($_POST['email'], FILTER_SANITIZE_STRING);

$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);


$stmt = $connect->prepare('SELECT * FROM users WHERE email = ?');
$stmt->execute([$username]);
$user = $stmt->fetch();



echo "<hr>";
if($password == $user['password']){
    $_SESSION['loggedin'] = $user['username'];
    echo  $_SESSION['loggedin'];
    header('Location: index.php');
}else {
    echo 'fan';
}
