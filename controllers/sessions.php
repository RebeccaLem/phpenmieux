<?php 

session_start();

$_SESSION['pseudo'] = $_POST['Rebecca'];
$_SESSION['mdp'] = $_POST['tartanpion'];
$_SESSION['isconnection'] = true;

?>

header('Location: index.php');