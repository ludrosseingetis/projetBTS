<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage Eleve 3</title>
</head>
<body bgcolor="green">
<center>

<?php
@include("connexion.php");    

$requete = "SELECT * FROM eleves";
$result = $pdo->query($requete);
echo ("Le nombre d'élèves :"." ".$result->rowCount());
?>

<section>
    <div >
        <div >
            <table border="1" style="color:black;">
                <tr>
                    <td>num_eleve</td>
                    <td>name_eleve</td>
                    <td>adresse_eleve</td>
                    <td>numtel_eleve</td>
                    <td>moyenne</td>
                    <td>supprimer</td>
                </tr>

                <?php
            while($enreg = $result->fetch(PDO::FETCH_ASSOC))
            {
            ?>
            <tr>
                <td>
                    <?php
                    echo $enreg["num"];
                    ?>
                </td>
                <td>
                    <?php
                    echo $enreg["nom"];
                    ?>
                </td>
                <td>
                    <?php
                    echo $enreg["adresse"];
                    ?>
                </td>
                <td>
                    <?php
                    echo $enreg["num_telephone"];
                    ?>
                </td>
                <td>
                    <?php
                    echo $enreg["moyennes"];
                    ?>
                </td>
                <td><a href="delete.php?num=<?php echo $enreg["num"];?>"> supprimer</a></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>
</center>
</section>
<?php 
    $pdo = null;
?> 

<a href="accueil.php">retour accueil  </a> 
</body>
</html>
