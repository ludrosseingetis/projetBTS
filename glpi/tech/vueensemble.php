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
            <button class="dropdown-btnc">Gestion des demandes 
                <i class="fa fa-caret-down"></i>
              </button>
            <div class="dropdown-containerc">

            <a href=""><input type="button" value="Vue d'ensemble" class="demandeekpc"></a>

            <a href="demandemoi.php"><input type="button" value="Demandes affecté a moi" class="demandeekp"></a>
            

            <a href="demandeequipe.php"><input type="button" value="Demandes affecté a mon équipe" class="demandeekp"></a>

            

        </div>

           <button class="dropdown-btn">Gestion des utilisateurs
            <i class="fa fa-caret-down"></i>
          </button>
        <div class="dropdown-container">

        <a href="gestionuser.php"><input type="button" value="Vue d'ensemble des utilisateurs" class="demandeekp"></a>
        

    <?php  // <a href="demandemoi.php"><input type="button" value="A modifier" class="demandeekp"></a>

        //<a href="demandemoi.php"><input type="button" value="A modifier" class="demandeekp"></a> ?>

    </div>
            <button class="dropdown-btn">Gestion du matériel 
        <i class="fa fa-caret-down"></i>
      </button>
    <div class="dropdown-container">

    <a href="listematos.php"><input type="button" value="Vue d'ensemble du Matériel" class="demandeekp"></a>
    

  <?php //  <a href="demandemoi.php"><input type="button" value="Demandes affecté a mon équipe" class="demandeekp"></a>

    //<a href="demandemoi.php"><input type="button" value="Demandes affecté a moi" class="demandeekp"></a>

    ?>

</div>

        </div>
        <div class="midbox">

        <h2>Tableau de bord de la Gestion des Demandes Utilisateurs</h2>
        <div class="hautgauche">
            <h2>Tickets à prendre en compte</h2>

            <?php 
            @include("../connexion.php");
            $requete = "SELECT * from tickets";
            $result= $pdo->query($requete);
            echo (" <font face='Arial'>Total : ".$result->rowCount()." éléments.</font>");


            $req1="SELECT * from tickets where `etat` = 'affecte'";
            $affecte= $pdo->query($req1);

            $req2="SELECT * from tickets where `etat` = 'en attente'";
            $nonaffecte= $pdo->query($req2);

            $req3="SELECT * from tickets where `etat` = 'resolu'";
            $resolu= $pdo->query($req3);
            ?>

            <div class="tableaustatut">
                <table >
                    <tr>

                    <td class="tit">
                        Statut

                    </td>
                    <td class="tit">
                        Nombre

                    </td>
                    </tr>
                    <tr>
                        <td>Affecté</td> <td><a href="demandeequipe.php"><?php echo (" <font face='Arial' color='blue'>".$affecte->rowCount()." </font>");?> </a></td>
                        
                    </tr>

                    <tr>
                        <td>Non affectée</td> <td><a href="listenonaffecte.php"><?php echo (" <font face='Arial' color='blue'>".$nonaffecte->rowCount()." </font>");?> </a></td>
                    </tr>
                    

                    <tr>
                        <td>Résolu</td>  <td><a href="listeresolu.php"><?php echo (" <font face='Arial' color='blue'>".$resolu->rowCount()." </font>");?> </a></td>
                    </tr>



                </table>

            </div>
            


        </div>

        <div class="hautdroite">

        </div>
        
       
       
    </div>

</body>
</html>
<style>
    *{
        margin:0;
        padding:0;
        
        
    }
    .tit {
        color: blue;
        text-decoration: underline;

    }
    .tableaustatut td, .tableaustatut tr {
        
       
        width: 1%;
        height: 18%;
        padding-bottom: 15px;
    }
    .tableaustatut table{
        font-family: Arial, Helvetica, sans-serif;
        margin-left: 20%;
        margin-top: 8%;
        width: 98%;
    }
    .tableaustatut{
        border: 1px solid black;
        width: 90%;
        height: 65%;
        margin-left: 5%;
        margin-top: 5%;
    }
    .hautgauche font {
        margin-left:5%;
        
    }
    .midbox h2 {
        margin: 2%;
        font-family: Arial, Helvetica, sans-serif;
        margin-left: 22%;
    }
    .midbox{
        background-color: white;
        float: right;
        width: 81%;
        height: 100%;
      
    }
    .hautdroite{
        border: 1px solid black;
        width: 49%;
        height: 45%;
        float: right;
        margin-top: 1%;
        margin-right: 1%;
        
        
    }
    .hautgauche {
     float: left;
     border: 1px solid black;
        width: 47%;
        height: 45%;
        margin-left: 1%;
        margin-top: 1%;
    }
    .demandeekp,.demandeekpc {
        
        border-right: none;
        border-left: none;
        border-bottom: none;
        border-top: none;
        background: transparent;
    }
    .demandeekpc {
        color: #f1f1f1;
        cursor: none;
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
.barreside a, .dropdown-btn, .dropdown-btnc {
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
.sidenav a:hover, .dropdown-btn:hover, .dropdown-btnc:hover {
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
.dropdown-container, .dropdown-containerc {
  display: none;
  transition-duration: 1s;
  transform: 1s;
  
 
  
  padding-left: 20px;
  
}
.dropdown-containerc {
    display: block;
}
.dropdown-btnc {
    display: block;
    color: #f1f1f1;
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
var dropdown = document.getElementsByClassName("dropdown-btnc");
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