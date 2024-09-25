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
            <a href="../index.php"><input type="button" value="Se deconnecter" class="logbut"></a>
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
        
      
        <button class="dropdown-btnc">Gestion de mes demandes
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-containerc">
            <a href=""><input type="button" value="Nouvelle Demande" class="demandeekpc"></a>
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
    <div class="midbox">
        <h2>Nouvelle Demande</h2>
        <div class="hautgauche">
            
            <?php @include("../connexion.php"); 
            $code=$_GET['num'];
            $id = $_SESSION['id'];
            $idtech = $_SESSION['idtech']; ?>
            <div class="tableaustatut">
                <div class="tabgauche">
                    <div class="mintabgauche">
                        <!-- New form starts here -->
                        <div class="form-container">
                            <?php $m="SELECT * from tickets WHERE id_ticket = '$code'";
                                    $r= $pdo->query($m);
                                    $enreg= $r->fetch(PDO::FETCH_ASSOC);
                                    ?>
                            <form method="POST" action="nvdemande.php">
                                
                                <div class="form-group">
                                    <label for="nom_ticket">ID du Ticket:</label>
                                    <input type="text" id="id_ticket" name="id_ticket" class="form-control" value='<?php echo $enreg['id_ticket'];?>'placeholder="<?php echo $enreg['id_ticket'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="kkticket">Nom du Ticket:</label>
                                    <input type="text" id="kkticket" name="kkticket" class="form-control" value='<?php echo $enreg['nom_ticket'];?>'>
                                </div>
                                <div class="form-group">
                                    <label for="commentaire">Commentaire:</label>
                                    <textarea id="commentaire" name="commentaire" class="form-control" placeholder="<?php echo $enreg['commentaire'];?>" value="<?php echo $enreg['commentaire'];?>"><?php echo $enreg['commentaire'];?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="id_user">ID Utilisateur:</label>
                                    <?php echo '<input type="text" id="id_user" name="id_user" class="form-control" value="' . htmlspecialchars($_SESSION['id']) . '" placeholder="' . htmlspecialchars($_SESSION['log']) . '"></input>'; ?>


                                </div>
                                <div class="form-group">
                                    <label for="id_technicien">ID Technicien:</label>
                                    <input type="text" id="id_technicien" name="id_technicien" class="form-control" value="<?php echo $enreg['id_technicien'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="importance">Importance:</label>
                                    <select id="importance" name="importance" class="form-control">
                                        <option><?php echo $enreg['importance'];?></option>
                                        <option>Urgent</option>
                                        <option>Moyen</option>
                                        <option>Bas</option>
                                        <option>Très Bas</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                <label for="etat">Etat:</label>
                                    <select id="etat" name="etat" class="form-control">
                                        <option><?php echo $enreg['etat'];?></option>
                                        <option>Affecte</option>
                                        <option>En attente</option>
                                        <option>Résolu</option>
                                        
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="id_equipe">Équipe:</label>
                                    <select id="id_equipe" name="id_equipe" class="form-control" >
                                        <option value='7'>équipe hotline</option>
                                        <option value='3'>équipe réseau</option>
                                        <option value='4'>équipe proximité</option>
                                        <option value='15'>équipe système</option>
                                </select>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Valider" class="form-control">
                                </div>
                            </form>
                        </div>
                        <!-- New form ends here -->
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<style>
    .gris {
        background-color: lightgrey;
        color:lightgrey;
    }
    .mintabgauche {
                width: 100%;
    }
    .tableaustatut {
        
        padding-top: 1px;
        margin-top: -1px;
    }
    .tabgauche {
        
        
        height: 95%;
       
        margin-bottom: 1%;
        margin-right: 1%;
       
    }
    * {
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
    }
    n {
        margin-left: 20px;
    }
    .tit {
        color: blue;
        text-decoration: underline;
    }
    .tableaustatut h3 {
        background-color: #009879;
        background: hsl(20, 50%, 70%);
        width: 130px;
        height: 75px;
        padding: 0;
        font-size: 17px;
        padding-top: 5%;
        padding-left: 5%;
        color: #ffffff;
        text-align: center;
    }
    .tableaustatut tr.active-row {
        font-weight: bold;
        background-color: #009879;
    }
    .tableaustatut tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }
    .tableaustatut td, .tableaustatut tr {
        text-align: center;
        width: 1%;
        height: 18%;
    }
    .tableaustatut table {
        font-family: Arial, Helvetica, sans-serif;
        margin-left: 1%;
        margin-top: 1%;
        width: 98%;
    }
    .tableaustatut {
        
        width: 96%;
        height: 75%;
        margin-left: 2%;
        border-radius: 5px;
        
        border-collapse: collapse;
        font-size: 0.9em;
        font-family: sans-serif;
       
    }
    .hautgauche font {
        margin-left: 5%;
    }
    .midbox h2 {
        margin: 1%;
        font-family: Arial, Helvetica, sans-serif;
        margin-left: 40%;
    }
    .midbox {
        background-color: white;
        float: right;
        width: 81%;
        height: 100%;
    }
    .hautdroite {
        border: 1px solid black;
        width: 49%;
        height: 45%;
        float: right;
        margin-top: 1%;
        margin-right: 1%;
    }
    .hautgauche {
        float: left;
       
        width: 98%;
        height: 80%;
        margin-left: 1%;
        margin-top: 1%;
    }
    .demandeekp, .demandeekpc {
        border: none;
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
    .logbut:hover {
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
        border: none;
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
        margin-top: 10px;
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
    .barrehaut {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        background-color: #313271;
        color: white;
        height: 10%;
        width: 100%;
    }
    .barreside {
        background-color: #0077b6;
        width: 19%;
        height: 100%;
        position: absolute;
    }
    body {
        background-color: lightblue;
    }
    .txt {
        width: 120px;
        height: 150px;
    }
    .form-container {
        margin-top: 20px;
        background: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        width: 100%;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }
    .form-groupc {
        margin-bottom: 15px;
    }
    .form-groupc label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }
    
    .form-groupc input{
        color: grey;
        background-color: lightgrey;
    }
    .form-groupc select{
       
            text-align: center; /* Center-align text */
            padding: 8px; /* Add padding for better appearance */
            font-size: 14px; /* Adjust font size as needed */
    }
     .form-control {
        width: 100%;
        padding: 4px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
    .form-control:focus {
        outline: none;
        border-color: #0077b6;
    }
    .barreside a, .dropdown-btn, .dropdown-btnc {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 20px;
        color: #818181;
        display: block;
        border: none;
        background: none;
        width: 100%;
        text-align: left;
        cursor: pointer;
        outline: none;
        margin-top: 15px;
    }
    .barreside a {
        border: 1px solid black;
        border-radius: 5px;
        margin-top: 5px;
        width: 220px;
        cursor: pointer;
    }
    .barreside input {
        cursor: pointer;
    }
    .sidenav a:hover, .dropdown-btn:hover, .dropdown-btnc:hover {
        color: #f1f1f1;
    }
    .main {
        margin-left: 200px;
        font-size: 20px;
        padding: 0px 10px;
    }
    .active {
        color: white;
    }
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
