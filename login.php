<?php
session_start();

include_once __DIR__ . "/database.php";
include_once __DIR__ . "/functions.php";

if( !empty($_POST['email']) && !empty($_POST['password']) ) {
    $credentials = [
        "email" => $_POST['email'],
        "password" => $_POST['password'],
    ];

    $user = login($credentials, $users);

    if( $user ) {
        $_SESSION['logged_in'] = true;
        $_SESSION['name'] = $user['name'];
        header("Location: http://localhost:8888/php-login/dashboard.php");
        die();
    } else {
        $_SESSION['error'] = "Credenziali errate";
        header("Location: http://localhost:8888/php-login/index.php");
        die();
    }
}