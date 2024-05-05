<?php
session_start();

/*if ( !isset( $_SESSION['route'] ) ) {
    # code...
} */
switch ( $_SESSION['route'] ) {
    case null :
        include_once('connection.php') ;
        break;
    
    default:
        # code...
        break;
}


?>