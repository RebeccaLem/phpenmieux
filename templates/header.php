<header>
    <nav id="navbar">
        <ul>
            <li class=""><a href="index.php">Accueil</a></li>
            <li class=""><a href="./inscriptions.php">Inscriptions</a></li>
            

            <?php if(isset($_SESSION['pseudo'])):?>
                <li class=""><a href="users.php">Ton profil</a></li>
                <li class=""><a href="users.php">Ta page</a></li>
            <li class=""><a href="./controllers/deconnexion.php">deconnexion</a></li>
            

           <?php else: ?> 
            <li class=""><a href="./connexion.php">Connexion</a></li>
           <?php endif ?>

        </ul>
    </nav>
</header>