<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/connexion.css">
    <script src="./js/javascript.js" defer></script>
    <title>Identification</title>
</head>

<body>

    <?php require_once './templates/header.php' ?>
    <div class="titreinscription">
        <h1>Pour te connecter</h1>
    </div>
    <div id="connexion">
        <form action="./controllers/sessions.php" method="post">
            <div>
                <label for="">Votre login : </label>
                <input type="text" name="pseudo" id="name" value="jean">
            </div>
            <div>
                <label for="">Votre mot de passe :</label>
                <input type="password" name="password" id="pwd" value="">
            </div>
            <?php if (isset($_SESSION['error'])):?>
                <p class="error">Mauvais identifiants !</p>
                <?php session_destroy() ?>
                <?php endif ?>
            <input type="submit" value="Connexion">
            <div id="newaccount">
                <p>Pas de compte ? Créez vous en un <span class="here" onclick="switchForm()">ici</span> !</p>
            </div>
            </form>
        </div>
        <div id="inscription">
    <form action="./validation.php" method="POST" class="none">
        <div>
            <label for="username">pseudo:</label>
            <input type="text" id="username" name="name">
        </div>
        <div>
            <label for="pass">Mot de passe (8 caractères minimum):</label>
            <input type="password" id="pass" name="password" minlength="8" required>
        </div>
        <div>
            <label for="email">Adresse e-mail</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="start">Date de naissance :</label>
            <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31">
        </div>
    
        <input type="submit" value="Envoyer !">
    </form>
</div >
</body>
</html>