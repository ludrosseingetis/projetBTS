<?php
session_start();
@include("connexion.php");

if (isset($_POST['log']) && isset($_POST['pwd']) && isset($_POST['statut'])) {
    $a = protect($_POST['log']);
    $b = md5(protect($_POST['pwd']));
    $c = protect($_POST['statut']);
    $d = 0;

    $code = sprintf('%04d', mt_rand(0, 9999));
	
    $e = md5(protect($code));

    $req = "SELECT * FROM users WHERE login=:a";
    $stmt = $pdo->prepare($req);
    $stmt->bindParam(':a', $a);
    $stmt->execute();

    if ($stmt->rowCount()) {
        echo "<section>
        <div class='form_box'>
            <div class='form_value'>
                <h3>Le compte avec l'identifiant $a existe déjà</h3>
                <form action=''>
                    <div class='register'>
                        <p>Retour à la <a href='index.html'>Page de connexion</a></p>
                    </div>
                </form>
            </div>
        </div>
        </section>";
    } else {
        $req1 = "INSERT INTO users VALUES (:a, :b, :c, :d, :e)";
        $stmt1 = $pdo->prepare($req1);
        $stmt1->bindParam(':a', $a);
        $stmt1->bindParam(':b', $b);
        $stmt1->bindParam(':c', $c);
        $stmt1->bindParam(':d', $d);
        $stmt1->bindParam(':e', $e);
        $stmt1->execute();

			echo '<script type="text/javascript">';
echo 'alert("Votre code est : ' . $code . '");';
echo '</script>';

            
echo"                    
                        <p>Retour à la <a href='index.html'>Page de connexion</a></p>
                   
     ";   
            
    
    }
} else {
    echo "Erreur : Tous les champs requis ne sont pas remplis.";
}

$pdo = null;
?>
