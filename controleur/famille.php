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
?>


<!--?php
//  $fa = new Famille( $_SESSION['pseudo'] ) ;
//$aff->a( $_SESSION['bdd']  ) ;
/*
$fa ->getfamille( $_SESSION['bdd'] ) ;
*/


$connection = new Connection( $_SESSION['bdd'] ) ; // connection a la bdd

$query = 'SELECT * FROM famille'; 
$results = $connection->query($query); 

$aff->a( @$_GET['famille'] ) ; // Efface-moi
//  $aff->f( [$results] ) ; // Efface-moi

if ( @$_GET['famille'] ) {

    $requette = "INSERT INTO famille ( NomFamille ) VALUES (:$_GET[famille]  ) ";

    $connection ->query( $requette);
    

}

while ($row = $results->fetchArray()) {
    var_dump($row); // Affiche les données de chaque ligne
}

//  $fa->getfamille( $connection );


?-->

<!-- ?php
$dbFile = $_SESSION['bdd'] ; // Remplacez par le chemin vers votre fichier SQLite
$db = new SQLite3($dbFile, SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE);
if (!$db) {
    die('Erreur de connexion à la base de données SQLite3.');
}

// Exécutez la requête SELECT
$query = 'SELECT * FROM famille'; // Remplacez "ma_table" par le nom de votre table
$results = $db->query($query);

// Parcourez les résultats
while ($row = $results->fetchArray()) {
    var_dump($row); // Affiche les données de chaque ligne
}
? -->
