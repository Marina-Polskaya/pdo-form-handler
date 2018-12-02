<?php

require_once 'Handler.php';

$pdoConnection = new Handler();


$loginForm = $pdoConnection->getLoginForm($_POST);
$passwordForm = $pdoConnection->getPasswordForm($_POST);



$stmt = $pdoConnection->prepare('select * from users where login = :login and password = :password');

$stmt->execute([':login' => $loginForm, ':password' => $passwordForm]);
$resultObjectArray = $stmt->fetchAll(PDO::FETCH_CLASS);


?>