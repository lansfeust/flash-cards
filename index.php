<?php
session_start();

/*# -----------------------------------------------
#		    Zone des 'imports' de bibliotheques
# -----------------------------------------------*/
include_once('controleur\autoload.php');
include_once('vue\head.html');
$route = 'http://127.0.0.1:8080/fc/' ;

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
//  $aff->f( $_SESSION ) ;// Efface-moi

switch ( @$_SESSION['route'] ) {
    case null :
        include_once('controleur/connection.php') ;
        break;

    case 'Accueil' :
        include_once('vue/menue.html') ;
//        $aff->B( 'Connection reussi !!!' ) ;; //Efface-moi

        switch ( @$_GET['route'] ) {
            case 'famille':
                include_once('vue\famille.html');
                include_once('controleur\famille.php') ;
                break;

            default:
                # code...
                break;
        }
        break;
    
    default:
        # code...; //Efface-moi
        break;
}

include_once('vue\footer.html');
?>