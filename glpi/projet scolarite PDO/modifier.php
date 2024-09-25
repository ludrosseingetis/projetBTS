
<!DOCTYPE html>
<html lang="en">
<head>
    <?php  session_start();
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modfifier la ligne</title>
</head>
<body bgcolor="green">

    <?php
@include("connexion.php");    
    $num = protect($_POST['num']);
    $a = protect($_POST['nom']);
    $b = protect($_POST['num_telephone']);
    $c = protect($_POST['adresse']);
    $d = protect($_POST['moyennes']);


    $req = "UPDATE eleves SET nom = :nom, num_telephone = :num_telephone, moyennes = :moyennes, adresse = :adresse WHERE num = :num";
    $stmt = $pdo->prepare($req);
    $stmt->bindParam(':nom', $a);
    $stmt->bindParam(':num_telephone', $b);
    $stmt->bindParam(':adresse', $c);
    $stmt->bindParam(':moyennes', $d);
    $stmt->bindParam(':num', $num);
    $stmt->execute();

    $_SESSION['returnidfnameA'] = ($num." : ".$a);
    echo "$_SESSION[returnidfnameA]";

    $pdo = null; // fermeture de la connexion PDO
?>

<a href="accueil.php">retour accueil  </a> 

    
</body>
</html>
