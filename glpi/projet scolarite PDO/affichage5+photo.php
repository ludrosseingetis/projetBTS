
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Liste eleves avec photo</title>

</head>
<body bgcolor="#90ee90">
<h1 style="font-size: 25px; font-weight: bold; color: red; text-align: center">Affichage des élèves </h1>
    </div>
    <?php
    @include("connexion.php");
session_start();
    //phpinfo();
        $requete = "SELECT * FROM eleves_v2";
        $result = $pdo->query($requete);
    ?>
    <?php
    $i = 1;
    while($enre = $result->fetch(PDO::FETCH_ASSOC))
    {
        ?>
        <div class="ouvrage_container">
            <h2 class="ouvrage_titre"><?php echo utf8_encode($enre['identifiant'])?></h2>
            <br>
            <p>
                <span style="text-align: left; color: red;">Identifiant : </span><span style="font-weight: bold"><?php echo utf8_encode($enre['identifiant'])?></span><br>
                <span style="text-align: left; color: red;ed">Nom : </span><span style="font-weight: bold"><?php echo utf8_encode($enre['nom'])?></span><br>
                <span style="text-align: left; color: red;ed">Prenom : </span><span style="font-weight: bold"><?php echo utf8_encode($enre['prenom'])?></span><br>
                <span style="text-align: left; color: red;ed">Date de naissance :</span><span style="font-weight: bold"><?php echo utf8_encode($enre['Date_naissance'])?></span><br>
                <span style="text-align: left; color: red;ed">Email :</span><span style="font-weight: bold"><?php echo utf8_encode($enre['email'])?></span><br>
                <span style="text-align: left; color: red;ed">Téléphone : </span><span style="font-weight: bold"><?php echo utf8_encode($enre['telephone'])?></span><br>
                <span style="text-align: left; color: red">Adresse : </span><span style="font-weight: bold"><?php echo utf8_encode($enre['adresse'])?></span><br>
                <span style="text-align: left; color: red">Ville :</span><span style="font-weight: bold"><?php echo utf8_encode($enre['ville'])?></span><br>
                <span style="text-align: left; color: red">Niveau :</span><span style="font-weight: bold"><?php echo utf8_encode($enre['niveau'])?></span><br>
                <span style="text-align: left; color: red">Commentaire :</span><span style="font-weight: bold"><?php echo utf8_encode($enre['commentaire'])?></span><br>
                <span style="text-align: left; color: red">Photo :</span><span style="font-weight: bold"><img src="images/<?php echo $enre['photo'];?>"width="100px" height="100px">
</span><br>

                <span style="text-align: left; color: red">Identifiant animation :</span><span style="font-weight: bold"><?php echo utf8_encode($enre['id_animation'])?></span><br>
            </p>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>        </div>
        <?php
        $i++;
//        header('Content-type: text/html; charset=utf-8');
    }?>
</div>
<?php $pdo=null;?>


<style>

    .container {
        height: 200px;
        position: relative;
        border: 3px solid green;
    }

    .center {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        transition: 0.3s ease-in-out;
    }

    .ouvrage_container
    {
        float: left;
        border-radius: 10px;
        border: 1px solid white;
        background-color: yellow;
        width: 15%;
        height: 450px;
        text-align: center;
        margin: 5px;
    }

    .ouvrage_btn
    {
        background-color: #3498db;
        color: black;
        font-weight: bold;
        border: 1px solid white;
        border-radius: 10px;
        transition: 0.3s ease-in-out;
        width: 90%;
        height: 50px;
    }

    .ouvrage_btn:hover
    {
        transform: scale(1.01);
        color: black;
        background-color: darkcyan;

    }

    .ouvrage_titre
    {
        color: red;
        font-size: 15px;
    }


</style>
<a href="accueil.php">retour accueil  </a> 

</body>
</html>
