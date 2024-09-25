<?php
@include("../connexion.php");

try {
    // Retrieve and sanitize POST data
    $nom = $_POST['kkticket'];
    $commentaire = $_POST['commentaire'];
    $id_user = $_POST['id_user'];
    $tecg = $_POST['id_technicien'];
    $idtk = $_POST['id_ticket'];
    $idtkc = $_POST['kkticket'];
    $importance = $_POST['importance'];
    $etat = $_POST['etat'];
    $ekp = $_POST['id_equipe'];

    

    // Prepared statement to prevent SQL injection
    $requete = $pdo->prepare("UPDATE tickets SET 
        nom_ticket = :nom, 
        
        commentaire = :commentaire, 
        id_user = :id_user, 
        etat = :etat,
        id_equipe = :id_equipe,
        importance = :importance, 
        id_technicien = :id_technicien
        WHERE id_ticket = :id_ticket");

    // Bind parameters
    $requete->bindParam(':nom', $nom);
    $requete->bindParam(':commentaire', $commentaire);
    $requete->bindParam(':id_user', $id_user);
    $requete->bindParam(':etat', $etat);
    $requete->bindParam(':id_equipe', $ekp);
    $requete->bindParam(':importance', $importance);
    $requete->bindParam(':id_technicien', $tecg);
    $requete->bindParam(':id_ticket', $idtk);
    

    // Execute the query
    $resultaet = $requete->execute();

    if ($resultaet) {
        header("Location: mesdemandes.php");
        exit();
    } else {
        echo "Echec de la modification";
    }
} catch (PDOException $e) {
    // Handle database connection or query errors
    echo "Erreur: " . $e->getMessage();
}
?>
