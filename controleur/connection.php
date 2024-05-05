<?php
/*
    Si $_GET['pseudo'] n'existe pas on affiche le formulaire .

    Si $_GET['pseudo'] existe  .
        => on fait les diffèrent testes de sécurité . 
        => Sinon on re-affiche le formulaire . 

    Si $_GET['pseudo']  reussi les diffèrent testes de sécurité .
        => On verifie qu'il y a une bdd du pseudo . 
            => elle existe , connection . 
            => on demande si c'est le bon pseudo . 
                => Si non efface la session . 
                => Si oui on crée la bdd .
        => On garde le  pseudo dans une session . 
*/
if ( isset( $_GET['pseudo'] ) ) {
    
    $_SESSION['pseudo'] = $_GET['pseudo'] ; 
    $_SESSION['route'] = 'oui' ; // Efface-moi
    $aff->a( 'Get connection' ) ;

}else {
    include_once('vue\formulaire_connection.html') ;
}
?>