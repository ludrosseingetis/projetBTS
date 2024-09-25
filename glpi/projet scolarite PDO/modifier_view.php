<?php
session_start();
@include("connexion.php");

?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body bgcolor='green'>
        <center>
            <h1>Formulaire modification élève: </h1>
            <form action="modifier.php" method="post">
            <table>
                <tr>
                    <td>Identifiant:<input type="text" name= "num"></td>
                    <td>Nom:<input type= "text" name= "nom"></td>
                </tr>
                <tr>
                    <td>Adresse:<input type= "text" name= "adresse"></td>
                    <td>Num de téléphone:<input type="tel" name="num_telephone"></td>
                </tr>
                <tr>
                    <td>Moyenne:<input type= "text" name= "moyennes"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="valider"><input type="reset" value= "annuler"></td>
                </tr>
            </table>
        </center>
    </body>
<a href="accueil.php">retour accueil  </a> 

</html>