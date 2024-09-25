<?php
session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body bgcolor='green'>
        <center>
        <?php
            echo "<center>Bienvenue : " . $_SESSION["log"]. "</center>";
        ?>
            <h1>Formulaire d'ajout élève: </h1>
            <form action="ajout.php" method="post">
            <table>
                <tr>
                    <td>Identifiant:<input type="text" name= "num"></td>
                    <td>Nom:<input type= "text" name= "name"></td>
                </tr>
                <tr>
                    <td>Adresse:<input type= "text" name= "adresse"></td>
                    <td>Num de téléphone:<input type="tel" name="tele"></td>
                </tr>
                <tr>
                    <td>Moyenne:<input type= "text" name= "moyenne"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="valider"><input type="reset" value= "annuler"></td>
                </tr>
            </table>
        </center>
    </body>
</html>