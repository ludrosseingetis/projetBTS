
<!DOCTYPE html>
<html lang="en">
<head>
    <?php  session_start();
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage eleve 3</title>
</head>
<body bgcolor="green">

<section>
    
        <center>
        <?php
// Inclusion du fichier de configuration
@include("connexion.php");

// Préparation de la requête SQL
$sql = "SELECT num, nom FROM eleves ORDER BY num";

// Exécution de la requête
$resultat = $pdo->query($sql);

// Affichage des résultats
echo '<form action="" method="post">';
echo '<h2> Elève </h2>';
echo '<p> Selectionnez : </p>';
echo '<select name="numero" style="width:100%;">';

while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)){
    echo '<option value = "' . $ligne["num"] . '">' . $ligne["nom"].'</option>';
}
echo "</select>";
echo "</form>";
echo ("Le nombre d'élèves :"." ".$resultat->rowCount()."<br><br>");

// Fermeture de la connexion
$pdo = null;
?>

</center>
            </div></div></section>  
<a href="accueil.php">retour accueil  </a> 
    
</body>
</html>
