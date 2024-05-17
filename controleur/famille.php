<?php
$fa = new Famille( $_SESSION['pseudo'] ) ;

$connection = new Connection( $_SESSION['bdd'] ) ; // connection a la bdd

$fa ->getfamille( $_SESSION['bdd'] ) ;



?>