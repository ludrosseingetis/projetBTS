
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche Eleve</title>
</head>
<body>

    <section>
<div class="form_box">
            <div class="form_value">
           
        <center>
        <?php
@include("connexion.php");    
$a = $_POST["num"];
$a = protect($a);
$requete = "SELECT * FROM eleves WHERE num=:num";
$stmt = $pdo->prepare($requete);
$stmt->bindParam(':num', $a);
$stmt->execute();

echo ("Voici la requete effectuée :"." ".$requete);
$resultat=$stmt->fetch(PDO::FETCH_ASSOC);
if ($resultat){
    echo "<h1>Voici les informations concernant l'élève id n° $a</h1>";
}
else{
    echo "<h1>Echec de la requête $requete, l'élève avec cet id = $a n'existe pas</h1>";
    echo $pdo->errorInfo();
}
?>

<table border=1>
    <tr>
        <td>num_eleve</td>
        <td>name_eleve</td>
        <td>numtel_eleve</td>
        <td>adresse_eleve</td>
        <td>moyennes</td>

    </tr>

    <?php
    $stmt->execute();
    while($enreg=$stmt->fetch(PDO::FETCH_ASSOC))
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
                echo $enreg["num_telephone"];
            ?>
        </td>
        <td>
            <?php
                echo $enreg["adresse"];
            ?>
        </td>
        <td>
      
            <?php
                            echo $enreg["moyennes"];

        
            ?>
        </td>
      
    </tr>
    <?php } ?>
</table>

        </center>
            </div></div></section>  
    
    </table>
    <?php 
        $pdo = null;
    ?>
</body>
<a href="accueil.php">retour accueil  </a> 

</html>
