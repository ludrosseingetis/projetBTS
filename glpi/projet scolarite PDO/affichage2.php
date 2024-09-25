
<!DOCTYPE html>
<html lang="en">
<head>
    <?php  session_start();
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage eleve 2</title>
</head>
<body bgcolor="green">

<section>
        <div class="form_box">
            <div class="form_value">
          
                  
                    
                    <center>
                    
                    <?php
                    
                    @include("connexion.php");
                    
                    $requete = "SELECT * FROM eleves";
                    $resultat = $pdo->query($requete);
                    
                    echo ("<h2>Le nombre d'élèves :"." ".$resultat->rowCount()."<br><br></h2>");
                    
                    while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
                        echo "<h6 style='font-size:25px;'>";
                        echo ($ligne["num"]." ; ");
                        echo ($ligne["nom"]." ; ");
                        echo ($ligne["adresse"]." ; ");
                        echo ($ligne["num_telephone"]." ; ");
                        echo ($ligne["moyennes"]." ; ");
                        echo "</h6>";
                    }
                    
                    $pdo = null;
                    
                    ?>
                    

</center>
            </div></div></section>
<a href="accueil.php">retour accueil  </a> 

    
</body>
</html>
