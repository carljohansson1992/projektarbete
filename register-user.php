<?php

require 'functions/methods.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$userGroup = $connect->prepare('SELECT * FROM users WHERE username = ? ');
$userGroup->execute([$username]);
$userCheck = $userGroup->rowCount();


if ($userCheck > 0) {
    echo "Användarnamnet är redan registrerat. <a href='../register.php'>Pröva igen här</a>";
} else {
    $register = $connect->prepare('INSERT into users(username, password, email) VALUES(?, ?, ?)');
    $register->execute([$username, $password, $email]);
    header("Location: login.php");
}


try {
    $statement->execute();
    header("Location: login.php");
} catch (PDOException $e) {
    var_dump($e ->getMessage());
}