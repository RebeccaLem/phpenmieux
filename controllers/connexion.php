<?php

session_start();


if ($_POST['pseudo'] === 'Jean' && $_POST['mdp'] === 'password') {
    $_SESSION['pseudo'] = $_POST['Jean'];
    $_SESSION['isconnected'] = true;
    header('Location: ../index.php');
} else {
    var_dump('pas connection');
    header('Location: ../connexion.php');
}





header('Location: ../index.php');




