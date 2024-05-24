<?php
/*
Affiche toutes les familles enregistrer dans la bdd 
Recupére le $_GET['famille'] et  l'enregistre
*/
?>
<?php

/*# -----------------------------------------------
#		    Zone des 'imports' de bibliotheques
# -----------------------------------------------*/
include_once('controleur\autoload.php');

/*# -------------------------------------------------------
#		Zone de déclaration des modules ou des fonctions
# -------------------------------------------------------*/
$Famille = new Famille() ;
$aff = new aff();// Efface-moi
/*# -------------------------------------------------------
#						PROGRAMME
# -------------------------------------------------------*/

$aff->b($_SESSION['route']) ;//Efface-moi
$aff->b($_SESSION['pseudo']) ;//Efface-moi
//$Famille->getBdd() ;//Efface-moi
?>