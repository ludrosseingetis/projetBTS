<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/tplogin/registeruserphp.css">
	<title>Crée un compte</title>
</head>
<body>

	<?php
	session_start();
	include("connexion.php");

	$a = protect($_POST['login']);
	$b = protect(md5($_POST['motdepasse']));
	$nom = protect($_POST['nom']);
	$prenom = protect($_POST['prenom']);
	$dob = protect($_POST['dob']);
	$tel = protect($_POST['tel']);

	

	$req = "SELECT * FROM user WHERE login=:a";
	$stmt = $pdo->prepare($req);
	$stmt->bindParam(':a', $a);
	$stmt->execute();
	if ($stmt->rowCount()){
		echo "<section>
		<div class='form_box'>
			<div class='form_value'>
			<h3>Le compte avec le login $a existe déjà</h3>
				<form action=''>
					<div class='register'>
						<p>Retour à la <a href='index.php'>Page de connexion</a></p>
					</div>
				</form>
			</div>
		</div>
			</section>";

	}else{
		$req1 = "INSERT INTO user (login, motdepasse, nom_user, prenom_user, date_naissance, num_telephone) VALUES (:a, :b, :c, :d, :e,:f)";
		$stmt1 = $pdo->prepare($req1);
		$stmt1->bindParam(':a', $a);
		$stmt1->bindParam(':b', $b);
		$stmt1->bindParam(':c', $nom);
		$stmt1->bindParam(':d', $prenom);
		$stmt1->bindParam(':e', $dob);
		$stmt1->bindParam(':f', $tel);
		$stmt1->execute();
		echo "<section>
		<div class='form_box'>
			<div class='form_value'>
			<h3>Le compte à bien été créé, contactez un directeur pour finaliser votre inscription</h3>
				<form action=''>
					<div class='register'>
						<p>Retour à la <a href='index.php'>Page de connexion</a></p>
					</div>
				</form>
			</div>
		</div>
			</section>";

	}

	$pdo = null;
?>



</body>