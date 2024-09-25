<!DOCTYPE html>
<html lang="en">
<head>
    <?php  session_start();
    ?>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="inscriptionpro.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>

</head>
<body> 
    
<form action="ajoutpro.php" method="post" enctype="multipart/form-data">
<div class='container'>
<h1>Inscription Officielle</h1>
  <label for="name">Nom:</label><br>
  <input type="text" id="name" name="name"><br>
  
  <label for="firstname">Prénom:</label><br>
  <input type="text" id="firstname" name="firstname"><br>
  
  <label for="birthdate">Date de naissance:</label><br>
  <input type="date" id="birthdate" name="birthdate"><br>
  
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email"><br>
  
  <label for="phone">Téléphone:</label><br>
  <input type="tel" id="phone" name="phone"><br>
  
  <label for="profilepic">Photo de profil:</label><br>
  <input type="file" id="file" name="file"><br>
  
  <label for="address">Adresse:</label><br>
  <input type="text" id="address" name="address"><br>
  
  <label for="city">Ville:</label><br>
  <select id="city" name="city">
    <option value="Paris">Paris</option>
    <option value="Marseille">Marseille</option>
    <option value="Toulouse">Toulouse</option>
    <option value="Lyon">Lyon</option>
    
  </select><br>
  
  <label for="level">Niveau:</label><br>
  <select id="level" name="level">
    <option value="Doctorat">Doctorat</option>
    <option value="Bac+3">Bac+3</option>
    <option value="Master">Master</option>
    <option value="BTS">BTS</option>
    
  </select><br>
  <?php
require_once("connexion.php");

$requete = "SELECT * FROM animations";
$stmt = $pdo->prepare($requete);
$stmt->execute();
?>

<label for="anim ">Animation:</label><br>
<select style="text-align: center; font-weight: bold;" id="anim" name="anim">
<option value="">--Choisissez une animation--</option>
<?php while($enre = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
    <option value="<?php echo $enre['id']; ?>"><?php echo utf8_encode($enre['nom']); ?></option>
<?php } ?>
</select><br>
  
  <label for="comments">Commentaire:</label><br>
  <textarea id="comments" name="comments"></textarea><br>
  
  <input type="submit" value="Valider">
  <input type="reset" value="Annuler">
  <br><br>
  <input type="button" value="Afficher la liste">
  <div>
</form>
</body>
</html>
