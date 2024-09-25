<meta charset="UTF-8">
<?php
@include("connexion.php");

$nom = $_POST["name"];
$prenom = $_POST["firstname"];
$date_naissance = $_POST["birthdate"];
$email = $_POST["email"];
$tel = $_POST["phone"];
$adresse = $_POST["address"];
$ville = $_POST["city"];
$niveau = $_POST["level"];
$commentaire = $_POST["comments"];
$id_animation = $_POST["anim"];
$id=0;
$file=$_FILES['file'];
$file_name = $_FILES["file"]['name'];
$file_tmp_name = $_FILES["file"]['tmp_name'];

$requete = "INSERT INTO eleves_v2 (identifiant, nom, prenom, Date_naissance, email, telephone,adresse,ville,niveau, commentaire, photo, id_animation) VALUES (:identifiant, :nom, :prenom, :Date_naissance, :email, :telephone,:adresse,:ville,:niveau, :commentaire, :photo, :id_animation)";

try {
    $stmt = $pdo->prepare($requete);
    $stmt->bindParam(':identifiant', $id);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':Date_naissance', $date_naissance);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telephone', $tel);
    $stmt->bindParam(':adresse', $adresse);
    $stmt->bindParam(':ville', $ville);
    $stmt->bindParam(':niveau', $niveau);
    $stmt->bindParam(':commentaire', $commentaire);
    $stmt->bindParam(':photo', $file_name);
    $stmt->bindParam(':id_animation', $id_animation);

    $path= "images/$file_name";
    if (move_uploaded_file($file_tmp_name, $path)){
        if ($stmt->execute()) {
            echo "étudiant ajouté avec succès";
        } else {
            $Info = $stmt->errorInfo();
echo "erreur d'ajout : " . $errorInfo[2];
        }
    } else {
        echo "erreur de chargement de l'image.";
    }
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

$pdo = null;
?>
