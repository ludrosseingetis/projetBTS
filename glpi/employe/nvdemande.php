<?php
@include("../connexion.php");

// Set the character set for the database connection
$pdo->exec("SET NAMES 'utf8'");

// Retrieve and sanitize POST data
$nom = $_POST['nom_ticket'];
$commentaire = $_POST['commentaire'];
$id_user = $_POST['id_user'];
$tecg = $_POST['id_technicien'];
$importance = $_POST['importance'];
$etat = $_POST['etat'];
$ekp = $_POST['id_equipe'];

// Corrected SQL query using prepared statements
$requete = $pdo->prepare("INSERT INTO tickets SET 
    nom_ticket = :nom_ticket, 
    commentaire = :commentaire, 
    id_user = :id_user, 
    etat = :etat,
    id_equipe = :id_equipe,
    importance = :importance, 
    id_technicien = :id_technicien");

// Bind parameters to ensure proper encoding
$requete->bindParam(':nom_ticket', $nom, PDO::PARAM_STR);
$requete->bindParam(':commentaire', $commentaire, PDO::PARAM_STR);
$requete->bindParam(':id_user', $id_user, PDO::PARAM_INT);
$requete->bindParam(':etat', $etat, PDO::PARAM_STR);
$requete->bindParam(':id_equipe', $ekp, PDO::PARAM_INT);
$requete->bindParam(':importance', $importance, PDO::PARAM_STR);
$requete->bindParam(':id_technicien', $tecg, PDO::PARAM_INT);

$resultat = $requete->execute();

if ($resultat) {
    header("Location: mesdemandes.php");
    exit();
} else {
    echo "Echec de la modification";
}
?>
