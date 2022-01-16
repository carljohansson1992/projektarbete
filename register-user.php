<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'functions/methods.php';

$pdo = connectToDB();

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password',FILTER_SANITIZE_STRING);


$statement = $pdo ->prepare('insert into users(username,email,password)
values (:username,:email,:password)');
$statement ->bindValue('username', $username);
$statement ->bindValue('email', $email );
$statement ->bindValue('password', $password);

try {
    $statement->execute();
    header("Location: login.php");
} catch (PDOException $e) {
    var_dump($e ->getMessage());
}