<?php
session_start();
?>


<html>
    <head>
        <meta charset='UTF-8'>
    </head>
    <body bgcolor="green">
        <h1> Bienvenue sur votre compte, vous êtes connectés </h1>
        <?php
            echo "<center>Bienvenue : " . $_SESSION["log"]. "</center>";
        ?>
        <h2>Gestion des élèves </h2>
        <a href="affichage1.php">Afficher la liste des élèves version 1</a><br>
        <a href="affichage2.php">Afficher la liste des élèves version 2</a><br>
        <a href="affichage3.php">Afficher la liste des élèves version 3</a><br>
        <a href="affichage4.php">Afficher la liste des élèves version 4</a><br>
        <a href="affichage5.php">Afficher cadres</a><br>
        <a href="affichage5+photo.php">Afficher cadres et photo (eleves_v2)</a><br>      
        <a href="delete_view.php">Supprimer un élève </a><br>
        <a href="ajout_view.php">Ajouter un élève </a><br>

        <a href="modifier_view.php">Modifier un élève</a><br>
        <a href="recherche_view.php">Rechercher un élève</a><br>
        <a href="recherche2_view.php">Rechercher un élève pour le modifier</a><br>
        <a href="inscription_pro.php">Ajouter un élève v2 pro</a><br>
        <a href="recherche3_view.php">Rechercher un élève 3 (liste deroulante)</a><br>

        <br>
        <a href="logout.php"> Deconnexion </a>

    </body>
</html>
