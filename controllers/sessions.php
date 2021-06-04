<?php

session_start();
require_once 'users.php';

foreach ($users as $user) {
    if ($_POST['pseudo'] == $user['name'] && $_POST['password'] == $user['password']) {
        $_SESSION['name'] = $_POST['pseudo'];
        password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $_SESSION['isConnected'] = true;
        header('Location: ../index.php');
        exit();
    }
}

// En passant par les sessions
$_SESSION['error'] = true;
header('Location: ../connexion.php');

// En passant pas les GET
// header('Location: ../connexion.php?error');

exit();