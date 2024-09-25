    <?php
    session_start();
    ?>

    <html>
        <body>
            <?php
            @include("connexion.php");
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login']) && isset($_POST['motdepasse'])) {

            $a= protect($_POST["login"]);
            $b= protect(md5($_POST["motdepasse"]));

            $_SESSION["log"]=$a;

        
            $requete="SELECT * from users where login='$a' and motdepasse= '$b'";

            $stmt1 = $pdo->prepare($requete);
            $stmt1->bindParam(':a', $a);
            $stmt1->bindParam(':b', $b);
            $stmt1->execute();

            if ($stmt1->rowCount()){

                $resultat = $stmt1->fetch(PDO::FETCH_ASSOC);
                if ($resultat && isset($resultat['valide']) && $resultat['valide'] == 1){
                    header("location:affichage1.php");
                    $doitValider = false;
                }
                else {
    $doitValider = true;
                }
                }
            else
                {header("location:user_fail.php");}


            }

            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['code']) && isset($_POST['login'])) {
                $login = protect($_POST['login']);
                $codeSaisi = md5(protect($_POST['code']));
            
                $requete = "SELECT * FROM users WHERE login = :login AND code = :code";
                $stmt = $pdo->prepare($requete);
                $stmt->bindParam(':login', $login);
                $stmt->bindParam(':code', $codeSaisi);
                $stmt->execute();
            
                if ($stmt->rowCount()) {
                    $updateRequete = "UPDATE users SET valide = 1, code = NULL WHERE login = :login";
                    $stmt2 = $pdo->prepare($updateRequete);
                    $stmt2->bindParam(':login', $login);
                    $stmt2->execute();
            
                    header("Location: affichage1.php");
                    exit();
                } else {
                    echo "Le code saisi est incorrect.";
                }
            }


                if (isset($doitValider) && $doitValider == true) {
                    echo "
                    <form method='post'>
                        <label for='code'>Entrez le code de validation :</label>
                        <input type='text' id='code' name='code' required>
                        <input type='hidden' name='login' value='$a'> 
                        <button type='submit'>Valider</button>
                    </form> ";

    }

    ?>
        </body>
    </html>
