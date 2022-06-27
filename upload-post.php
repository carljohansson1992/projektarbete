<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'functions/methods.php';



$title = filter_input(INPUT_POST, 'title', FILTER_UNSAFE_RAW);
$content = filter_input(INPUT_POST, 'content', FILTER_UNSAFE_RAW);

if (isset($_POST['draft'])) {
    $draft = "hide";
} else {
    $draft = "show";
}
$author = $_SESSION['loggedin'];
$statement = $connect->prepare('insert into posts(title,content,author,draft)
values (:title,:content,:author,:draft)');
$statement ->bindValue('title', $title);
$statement ->bindValue('content', $content );
$statement ->bindValue('author', $author);
$statement ->bindValue('draft', $draft);

try {
    $statement->execute();
    header('Location: blog.php');
} catch (PDOException $e) {
    var_dump($e ->getMessage());
}