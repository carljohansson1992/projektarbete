<?php
session_start();
include 'functions/methods.php';
//$user_id =$_SESSION['user']['user_id'];

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
$username = filter_var($_POST['email'], FILTER_SANITIZE_STRING);

$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
//$pdo = connectToDB();
print_r($username);
echo "<br>";
print_r($password);
$stmt = $database->prepare('SELECT * FROM users WHERE email = ?');
//$stmt->execute(['username' => $username]);
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
