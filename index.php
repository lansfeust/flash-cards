<?php
session_start();

/*# -----------------------------------------------
#		    Zone des 'imports' de bibliotheques
# -----------------------------------------------*/
include_once('controleur\autoload.php');
include_once('vue\head.html');


/*# -------------------------------------------------------
#		Zone de déclaration des modules ou des fonctions
# -------------------------------------------------------*/
include_once('controleur\deconnection.php');
$aff = new aff(); // affiche mieux les variables (code personnel ); //Efface-moi

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
        # code...; //Efface-moi
        break;
}

$aff->a($_SESSION['route']) ;; //Efface-moi

$aff->a($_GET['Deconnection']) ; //Efface-moi
include_once('vue\footer.html');
?>