
<html lang="en">
<head>
    <?php  session_start();
    ?>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body bgcolor="green">
    <form action="register.php" method="post">
        <center><h1>S'enregistrer</h1></center>
        <center><div>
        Nom de Login : <input type="text" name="log" class="style1"><br>
        Mot de passe : <input type="password" name="pwd" class="style2"><br>
        Statut user : <input type="password" name="statut" class="style2"><br>
    
        <input type="submit" value="enregistrez vous" class="style"><br>
        <input type="reset" value="annuler" class="style"><br>
        <a href="index.html">Se connecter</a>
        </div></center>
        </form>
<a href="accueil.php">retour accueil  </a> 
        
    
</body>
</html>