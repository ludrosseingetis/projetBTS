<?php
$dsn = 'mysql:host=localhost;dbname=glpi;charset=utf8mb4';
$user = 'root';
$password = '';


try {
    $pdo= new PDO ($dsn, $user, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

function protect($w) {
    $w = str_replace("=","", $w);
    $w = str_replace("'","", $w);
    $w = str_replace('"','', $w);
    $w = str_replace('(','', $w);
    $w = str_replace(')','', $w);
    $w = str_replace('*','', $w);
    return($w);
}

?>