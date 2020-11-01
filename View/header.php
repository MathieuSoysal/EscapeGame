<header>
    <div class="left col-5">
        <a href="index.php">
            <h1>Le Casse de la Compta</h1>
        </a>
    </div>

    <div class="right col-7">
        <a class="item box degrade_halloween" href="jeux.php">
            <p class="item_title">Jeux</p>
        </a>
        <a class="item box degrade_halloween" href="classement.php">
            <p class="item_title">Classement</p>
        </a>
        <?php if(!isset($_SESSION["user_connected"])): ?>
        <a class="item box degrade_halloween" href="inscription.php">
            <p class="item_title">Inscription</p>
        </a>
        <a class="item box degrade_halloween" href="connexion.php">
            <p class="item_title">Connexion</p>
        </a>
        <?php endif;
        if (isset($_SESSION["user_connected"])): ?>
        <a class="item box degrade_halloween" href="compte.php">
            <p class="item_title">Mon Compte</p>
        </a>
        <?php endif; ?>
    </div>
</header>