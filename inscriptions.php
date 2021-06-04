


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Fichier HTML</title>
</head>
<body>
    <?php require_once './templates/header.php' ?>
    <div class="titreinscription"><h1>Inscrivez-vous !</h1></div>
    <div id="inscription">
    <form action="./validation.php" method="POST">
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
    </div >
    </form>
</body>
</html>