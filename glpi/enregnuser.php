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
<body>
    <form action="enrengistrer.php" method="post">
        <center><h1>Se connecter</h1></center>
        <center><div>
        Nom de Login : <input type="text" name="log" class="style1"><br>
        Mot de passe : <input type="password" name="pwd" class="style2"><br>
        Statut : <input type="text" name="statue" class="style2"><br>
        <br><br>
    
        <input type="submit" value="Se connecter" class="style"><br>
        <input type="reset" value="annuler" class="style"><br>
        <a href="index.php">Se connecter</a>
        </div></center>
        </form>
        
    
</body>
</html>