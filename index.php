<?php
session_start();

/*# -----------------------------------------------
#		    Zone des 'imports' de bibliotheques
# -----------------------------------------------*/
include_once('controleur\autoload.php');
include_once('vue\head.html');



/*# -------------------------------------------------------
#						PROGRAMME
# -------------------------------------------------------*/
switch ( @$_SESSION['route'] ) {
    case null :
        include_once('controleur/connection.php') ;
        break;
    
    default:
        # code...
        break;
}


include_once('vue\footer.html');
?>