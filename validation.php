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
        <h1>bravo <?php $_SESSION['pseudo']?> tu es bien inscrit</h1>
    </div>
    </div>

</body>
</html>