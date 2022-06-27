<?php

include "../functions/methods.php";

$postValue = $_POST['post-delete'];

$removedPost = $connect->prepare('DELETE from posts WHERE id=' . $postValue . ';');

$removedPost->execute();

header('Location: ../blog.php');