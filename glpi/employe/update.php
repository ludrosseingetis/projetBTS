<?php
@include("../connexion.php");

$id = $_POST['id_ticket'];
$nom = $_POST['kkticket'];
$commentaire = $_POST['commentaire'];
$id_user = $_POST['id_user'];
$id_tech = $_POST['id_tech'];
$importance = $_POST['importance'];
$etat = $_POST['etat'];

// Corrected SQL query
$requete = "UPDATE tickets SET 
    nom_ticket='$nom', 
    commentaire='$commentaire', 
    id_user='$id_user', 
    id_technicien='$id_tech', 
    importance='$importance', 
    etat='$etat' 
    WHERE id_ticket='$id'";

$resultat = $pdo->query($requete);

if ($resultat) {
    header("location:mesdemandes.php");

    

    
    
     
} else {
    echo "Echec de la modification";
}
?>