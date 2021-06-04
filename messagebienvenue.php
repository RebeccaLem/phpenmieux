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
        <?php if(isset($_SESSION['isconnected'])); ?>
        <h1>Bienvenue <?php $_POST['pseudo'] ?> tu es bien connecté</h1>
        <?php else:?>
            <?php require 'templates/unauthorised.php' ?>
            <?php endif ?>
    </div>
    </div>

</body>
</html>