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
    $chemin_bdd = 'model/'.$_SESSION['pseudo'].'.db'  ; // On récupére le chemin de la base de données
    $reponse = is_file($chemin_bdd) ; // Teste si le fichier existe
//    $_SESSION['route']= 'acceuil' ;

    if ( $reponse ) {
        $_SESSION['pseudo'] = $_GET['pseudo'] ; 
        $connection = new Connection( $chemin_bdd ) ; // Si le fichier existe on ce connecte
        echo '<META HTTP-EQUIV="Refresh" CONTENT="1; ">' ; // Actualisation de la page
        $_SESSION['route']= 'acceuil' ;
        $_SESSION['bdd'] = $chemin_bdd ; 

        
    }else {
        $texte =  <<<AOE
        <div class="container">

        <h1 class="display-4">L'utilisateur <span class="text-danger">  $_GET[pseudo] </span> que vous avez entré n'existe pas</h1>

        <p class="lead">Voulez-vous :</p>
        
        <form action="$route" method="GET">
        <input type="Hidden" class="form-control" id="number1" name="pseudo" value="$_GET[pseudo]">
        <!--- <a href=$route button type="submit" class="btn btn-secondary"  >Changer d'utilisateur</a> Vrai version en réel --->
        <a href=$route?creer=creation button type="submit" class="btn btn-primary"  >Créer un utilisateur</a>
        <a href=$route button type="submit" class="btn btn-secondary"  >Changer d'utilisateur</a>
        </form>
    </div>
AOE;

        echo $texte ;
    }

}elseif ( @$_GET['creer']  ) {

    $chemin_bdd = 'model/'.$_SESSION['pseudo'].'.db'  ; // On récupére le chemin de la base de données
    $_SESSION['bdd'] = $chemin_bdd ; 
    $connection = new Connection( $_SESSION['bdd']  ) ; // Si le fichier existe pas on le crée
    $connection ->creationTable() ;
    $_SESSION['route']= 'acceuil' ;

    echo '<META HTTP-EQUIV="Refresh" CONTENT="1; ">' ; // Actualisation de la page
}
else {
    include_once('vue\formulaire_connection.html') ;
}
?>