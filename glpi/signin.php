<html lang="en">
<head>
    <?php  session_start();
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'enrengistrer</title>
</head>
<body>
    <form action="enrengistrer.php" method="post">
        <div class="barrehaut">
        <a href="accueil.php"><h1 class="h1" style="color:white;">GLPI</h1></a>
        <div class="right">
         <a href="index.php"> <input type="button" value="Se Connecter" class="logbut"> </a> 
        </div>
        </div>
        <div class="barreside">
              <div class="mothaut">
        <br>
        Bienvenue <?php echo $_SESSION['log']; ?>
        <br><br>
        Vous êtes un <?php echo $_SESSION['grade']; ?>
        <style>.mothaut{
            margin-left: 20px;
        }</style>
        </div>            test

        </div>
        
        <center><div class="mid">
            <br>
            <h1 class="title">S'enrengistrer</h1>
            <div class="form">
        <input type="text" name="login" class="style1" class="ligne1" placeholder="Nom d'Utilisateur">
         <input type="password" name="motdepasse" class="style1" class="ligne1" placeholder="Mot de Passe"><br>
         <input type="text" name="prenom" class="style1" class="ligne2" placeholder="Prénom">
         <input type="text" name="nom" class="style1" class="ligne2" placeholder="Nom"><br>
         <input type="date" name="dob" class="style1" class="ligne2" placeholder="Date de Naissance">
         <input type="text" name="tel" class="style1" class="ligne2" placeholder="Numéro de Téléphone"><br>
        <br><br>
    
        <input type="submit" value="S'enrengistrer" class="style"><br>
        <input type="reset" value="annuler" class="style"><br>
      
        </div></center></div>
        </form>
        

</body>
</html>
<style>
    *{
        margin:0;
        padding:0;
        
        
    }
    .title {
        font-family: Arial, Helvetica, sans-serif;
    }
   
  
    .logbut {
        margin-top: 10%;
        height: 50%;
        width: 90%;
        font-size: 14px;
        border-radius: 15px;
        margin-right: 4%;
    }
    .logbut:hover{
        background-color: lightgrey;
        transition-duration: 0.4s;
    }
    .right {
       float: right;
        width: 150px;
    }
    .form {
        justify-content: center;
        align-items: center;
        display: grid;
    }
        .style1 {
            
    padding: 20px 10px 10px;
    background: transparent;
    font-family: Arial, Helvetica, sans-serif;
    border-color: black;
    border-top: none;
    border-left: none;
    border-right: none;
    font-size: 1em;
    outline: none;
    color: black;
    margin-top: 10px;
}
.mid {
    border: 2px solid black;
    border-radius: 8px;
    width: 30%;
    height: 88%;
    margin-top: 1%;
    box-shadow: 4px 4px 4px #583434;
    background-color: rgb(137, 137, 201);
   
   
 
}


.h1 {
    font-family: Arial, Helvetica, sans-serif;
    margin-left: 3%;
    width: 50px;
    float: left;
    margin-top: 1%;
   

}
.style {
    border: 1px solid black;
    border-radius: 6px;
 
    background-color: transparent;
   
    height: 50px;
   
    padding: 1px;
    margin-bottom: 0px;
    font-size: 17px;
}
.style:hover {
    background-color: rgb(120, 89, 89);
    color: white;
    transition-duration: 0.4s;
}
a {
    text-decoration: none;
    margin-top: 10px;
    color: black;
}
.barrehaut{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    background-color: #313271;
    color: white;
    height: 10%;
    width: 100%;
   
}
.barreside{
    display: none;
    background-color: #0077b6;
    width: 10%;
    height: 100%;
    position: absolute;
}
body{
    background-color: lightblue;
}
</style>