<?php

include "../functions/methods.php";

$postId = $_POST['post-id'];
$newPostValue = $_POST['edited-content'];

$editedContent = $connect->prepare('UPDATE posts SET content="' . $newPostValue .'" WHERE id=' . $postId . ';');


$editedContent->execute();

header('Location: ../blog.php');