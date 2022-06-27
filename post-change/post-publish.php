<?php

include "../functions/methods.php";

$postValue = $_POST['post-publish'];

$publish = $connect->prepare('UPDATE posts SET draft="show" WHERE id=' . $postValue . ';');

$publish->execute();

header('Location: ../blog.php');
