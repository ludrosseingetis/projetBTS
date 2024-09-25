<html lang="en">
<head>
    <?php  session_start();
    ?>
    
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    
        <div class="barrehaut">
        <a href="accueil.php"><h1 class="h1" style="color:white;">GLPI</h1></a>
        <div class="right">
         <a href="../index.php"> <input type="button" value="Se deconnecter" class="logbut"> </a> 
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
        </div>
        

            <button class="dropdown-btn">Gestion de mes demandes 
                <i class="fa fa-caret-down"></i>
              </button>
            <div class="dropdown-container">

            <a href="nouvelledemande.php"><input type="button" value="Nouvelle Demande" class="demandeekp"></a>

            <a href="mesdemandes.php"><input type="button" value="Mes Demandes" class="demandeekp"></a>
            

           



        </div>

        <button class="dropdown-btn">Matériel et Réservations
            <i class="fa fa-caret-down"></i>
          </button>
        <div class="dropdown-container">

        <a href="gestionuser.php"><input type="button" value="Mon Materiel" class="demandeekp"></a>
        

        <a href="demandemoi.php"><input type="button" value="Demandes affecté a mon équipe" class="demandeekp"></a>

      

    </div>


        </div>
        
        <center><div class="mid">
            <br>
            <h1 class="title">Se Connecter</h1>
            <div class="form">
        <input type="text" name="login" class="style1" placeholder="Nom d'Utilisateur"><br>
         <input type="password" name="motdepasse" class="style1" placeholder="Mot de Passe"><br>
        <br><br>
    
        <input type="submit" value="Se connecter" class="style"><br>
        <input type="reset" value="annuler" class="style"><br>
      
        </div></center></div>
       
        

</body>
</html>
<style>
    *{
        margin:0;
        padding:0;
        font-family: arial;
        
        
    }
    .demandeekp {
        
        border-right: none;
        border-left: none;
        border-bottom: none;
        border-top: none;
        background: transparent;
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
            width: 100%;
    padding: 20px 10px 10px;
    background: transparent;
    font-family: Arial, Helvetica, sans-serif;
    border-color: black;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: none;
    font-size: 1em;
    outline: none;
    color: black;
    margin-top: 10px;
}
.mid {
    border: 2px solid black;
    display:none;
    border-radius: 8px;
    width: 30%;
    height: 65%;
    margin-top: 6%;
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
    margin-top: 6px;
    background-color: transparent;
    width: 200px;
    height: 50px;
    margin-top:12px;
    padding: 5px;
    margin-bottom: 10px;
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
   
    background-color: #0077b6;
    width: 19%;
    height: 100%;
    position: absolute;
}
body{
    background-color: lightblue;




}





/* Fixed sidenav, full height */


/* Style the sidenav links and the dropdown button */
.barreside a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  
  background: none;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  margin-top: 15px;
}
.barreside a{
    border: 1px solid black;
    border-radius: 5px;
    margin-top: 5px;
    width: 220px;
    cursor: pointer;
}
.barreside input {
    cursor: pointer;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  
  color: white;
  
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  transition-duration: 1s;
  transform: 1s;
  
 
  
  padding-left: 20px;
  
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
</style>
<script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>