
<!DOCTYPE html>
<html lang="en">
<head>
    <?php  session_start();
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un élève</title>
</head>
<body>

<?php
@include("connexion.php");    


$c = $_REQUEST['num'];
	$c = protect($c);

    $requete="DELETE FROM eleves WHERE num=:num";
    echo ("<center>Voici la requete effectuée :"." ".$requete."</center>");

    $stmt = $pdo->prepare($requete);
    $stmt->bindParam(':num', $c);

    if ($stmt->execute() && $stmt->rowCount() > 0) {
        echo "<section>
                <div class='form_box'>
                    <div class='form_value'>
                        <center>
                        </center>
                        <h3>La suppression de l'élève $c a bien été effectuée.</h3>
                        <form action=''>
                            <div class='register'>
                                <p>Retour à la <a href='../../html/tplogin/registerelevehtml.php'>page d'enregistrement</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </section>";
    } else {
        echo "<section>
                <div class='form_box'>
                    <div class='form_value'>
                        <center>
                        </center>
                        <h3>Echec de la requête $requete, l'élève n'existe pas</h3>
                        <form action=''>
                            <div class='register'>
                                <p>Retour à la <a href='../../html/tplogin/registerelevehtml.php'>page d'enregistrement</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </section>";
        $pdo->errorInfo();
    }
    $pdo = null;
?>

    
</body>
</html>