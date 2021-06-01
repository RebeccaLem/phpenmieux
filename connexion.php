<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Identification</title>
</head>

<body>

    <?php require_once './templates/header.php' ?>
    <div class="titreinscription">
        <h1>Pour te connecter</h1>
    </div>
    <div class="inscriptions">
        <form action="./controllers/connexion.php" method="post">
            <div>
                <label for="">Votre login : </label>
                <input type="text" name="pseudo" value="jean">
            </div>
            <div>
                <label for="">Votre mot de passe :</label>
                <input type="password" name="password" value="password">
            </div>
            <input type="submit" value="Connexion">
        </form>
    </div>

</body>
</html>