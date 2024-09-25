<?php
session_start();
?>
<html>
    <body>
        <?php
     
        @include("connexion.php");
        
        
        $a=protect($_POST["login"]);
        $b=protect(md5($_POST["motdepasse"]));
        
        $_SESSION["log"]=$a;

        
        


    
        $requete= "SELECT * from user where login= '$a' and motdepasse= '$b'";
        $result = $pdo->query($requete);

        
        
        

  
        $enreg = $result->fetch(PDO::FETCH_ASSOC);
        $id=$enreg["id_user"];
        $_SESSION["id"]=$id;
        $log=$enreg["login"];
        $_SESSION["log"]=$log;
        $grade=$enreg["grade"];
        $idtech=$enreg["id_technicien"];
        $_SESSION["grade"]=$grade;
        $_SESSION["idtech"]=$idtech;
        $statut=$enreg["statut_code"];
        
        
        
        
        $ligne= $result->rowCount();

        if($ligne==0) {
            echo "Erreur, mot de passe erroné ou votre compte n'as pas été valider par un directeur.";
        }
        if ($ligne==1){
            
                if($enreg["grade"]=="Technicien") {
               header("location:tech/accueil.php");
                  }
                 else
                  if($enreg["grade"]=="Directeur"){
                  header("location:proviseur/accueil.php");
                  }else
                  if($enreg["grade"]=="Hotline"){
                  header("location:hotline/accueil.php");
                  }else
                  if($enreg["grade"]=="Employe"){
                    header("location:employe/accueil.php");
                   }
else {
    echo "Erreur, mot de passe errone ou votre compte n'es valider par un directeur.";
}
        }

?>

</body>
</html>
