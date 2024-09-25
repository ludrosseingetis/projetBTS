<?php

function protect($w){
    $w=str_replace("=","",$w);
    $w=str_replace("'","",$w);
    $w=str_replace('"','',$w);
    $w=str_replace('(','',$w);
    $w=str_replace(')','',$w);
    $w=str_replace('*','',$w);
    return ($w);
 }
$dsn = 'mysql:host=localhost;dbname=scolarite44';
$user = 'root';
$password = '';
try{
$pdo= new PDO($dsn, $user, $password);
// Activation des exceptions PDO pour gérer les erreurs
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
echo 'Connexion échouée :'. $e->getMessage();
}
?>
