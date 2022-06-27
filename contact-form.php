<?php
include 'functions/methods.php';
$formFirstName = $_POST['firstname'];
$formLastName = $_POST['lastname'];
$formEmail = $_POST['email'];
$formContent = $_POST['content'];
var_dump($formContent, $formEmail, $formFirstName, $formLastName);

$formValue = $connect->prepare('INSERT INTO contact_mail(firstname, lastname, email, content) VALUES(?, ?, ?, ?)');
$formValue->execute([$formFirstName, $formLastName, $formEmail, $formContent]);

$formContent = wordwrap($formContent, 70, "\r\n");


mail("carljohansson.1992@gmail.com", "Mail genom kontaktformulär - Carlträbyrå", $formContent, $formEmail);
header('Location: index.php');
