<?php
require_once("connexion.php");

$a = $_POST["num"];
$b = $_POST["name"];
$c = $_POST["adresse"];
$d = $_POST["tele"];
$e = $_POST["moyenne"];

$requete = "INSERT INTO eleves (num, nom, adresse, num_telephone, moyennes) VALUES (:num, :name, :adresse, :tele, :moyenne)";

try {
    $stmt = $pdo->prepare($requete);
    $stmt->bindParam(':num', $a);
    $stmt->bindParam(':name', $b);
    $stmt->bindParam(':adresse', $c);
    $stmt->bindParam(':tele', $d);
    $stmt->bindParam(':moyenne', $e);

    if ($stmt->execute()) {
        echo "<center><p>Ajout OK</p></center>";
    } else {
        echo "<center><p>Erreur lors de l'ajout</p></center>";
    }
} catch(PDOException $e) {
    echo "<center><p>Erreur : " . $e->getMessage() . "</p></center>";
}

echo '<center><a href="accueil.php">Retour</a></center>';

$pdo = null;
?>
