<!DOCTYPE html>
<!-- 
     Page web créé dans le cadre du cours de web Dev le 03/04/2020
     Auteur : Luke DUSSART
     Email : lukedussart@hotmail.fr
-->
<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: connexion.php');
    exit();
}
?>
<html lang="fr-FR">
    <head>
        <title>Casques Nolark : Sécurité et confort, nos priorités !</title>
        <meta charset="UTF-8">
        <meta name="author" content="Luke DUSSART">
        <meta name="description" content="Découvrez des casques moto dépassant même les exigences des tests de sécurité. Tous les casques Nolark au meilleur prix et avec en prime la livraison gratuite !">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="../css/membres.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="../favicon.ico">
    </head>
    <body>
        <?php
        include('../includes/header.html.inc.php');
        ?>
        <div id="principal">
            <nav class="nav_client">
                <ul class="ul_client">
                    <li class="li_client">
                        <a href="/membres/informations">Mon Profil</a>
                    </li>
                    <li class="li_client">
                        <a href="/membres/commandes">Mes commandes</a>
                    </li>
                    <li class="li_client">
                        <a href="deconnexion.php">Déconnexion</a>
                    </li>
                </ul>
            </nav>
        </div>
        <h1>Bienvenue <?php echo htmlentities(trim($_SESSION['login'])); ?> !</h1>

        <?php
        include('../includes/footer.inc.php');
        ?>
    </body>
</html>
