<?php

$chemin = dirname( $_SERVER['SCRIPT_FILENAME']  ) ;// Préparation du chemin absolue de la base de donnée
$chemin = $chemin.'/model/'.$_SESSION['pseudo'] .'.db'; // Création du chemin absolue de la base de donnée

try{
    $pdo = new PDO('sqlite:'. $chemin  );
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ERRMODE_WARNING | ERRMODE_EXCEPTION | ERRMODE_SILENT
} catch(Exception $e) {
    echo "Impossible d'accéder à la base de données SQLite : ".$e->getMessage();
    die();
}


$var = @$_GET['famille'] ;

//$count = $dbh->exec("DELETE FROM fruit");
$sql =  'SELECT NomFamille FROM famille ';

foreach  ($pdo->query($sql) as $row) {
    print $row['NomFamille'] . "\t";
}

?>