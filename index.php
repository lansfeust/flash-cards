<?php
session_start();

/*# -----------------------------------------------
#		    Zone des 'imports' de bibliotheques
# -----------------------------------------------*/
include_once('controleur\autoload.php');
include_once('vue\head.html');
include_once('controleur\deconnection.php');


/*# -------------------------------------------------------
#		Zone de déclaration des modules ou des fonctions
# -------------------------------------------------------*/
$aff = new aff(); // affiche mieux les variables (code personnel )

/*# -------------------------------------------------------
#						PROGRAMME
# -------------------------------------------------------*/

/*
    Si $_SESSION['route'] n'existe pas on propose a l'utilisateur de ce connecter / inscrire . 
*/
switch ( @$_SESSION['route'] ) {
    case null :
        include_once('controleur/connection.php') ;
        break;
    
    default:
        # code...
        break;
}

$aff->a($_SESSION['route']) ;

$aff->a($_GET['Deconnection']) ;
include_once('vue\footer.html');
?>