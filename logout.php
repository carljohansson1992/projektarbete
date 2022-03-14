<?php



session_start();



require_once('functions/methods.php');



if (isset($_SESSION['loggedin'])) {

session_unset();

session_destroy();



session_regenerate_id();



header('Location: index.php');

}