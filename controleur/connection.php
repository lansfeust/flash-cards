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
if ( isset( $_POST['pseudo'] ) ) {
    
    $chemin_bdd = 'model/'.$_POST['pseudo'].'.db'  ;
    $reponse = is_file($chemin_bdd) ; // Teste si le fichier existe

    if ( $reponse ) {
        $_SESSION['pseudo'] = $_POST['pseudo'] ; 
        $connection = new Connection( $chemin_bdd ) ; // Si le fichier existe on ce connecte
        $aff->b('heeee hooooo !!!');
        
    }else {
        $texte =  <<<AOE
        <div class="container">

        <h1 class="display-4">L'utilisateur <span class="text-danger">  $_POST[pseudo] </span> que vous avez entré n'existe pas</h1>

        <p class="lead">Voulez-vous :</p>
        
        <form action="" method="post">
        <input type="Hidden" class="form-control" id="number1" name="pseudo" value="$_POST[pseudo]">
        <button type="submit" class="btn btn-primary" name='creer' value='creation'button>Créer un utilisateur</button>
        <!--- <a href=http://$_SERVER[SERVER_NAME]:8080 button type="submit" class="btn btn-secondary"  >Changer d'utilisateur</a> Vrai version en réel --->
        <a href=http://127.0.0.1:8080/fc/ button type="submit" class="btn btn-secondary"  >Changer d'utilisateur</a>
        </form>
    </div>
AOE;

        echo $texte ;
    }

}elseif ( @$_POST['creer']  ) {
    $_SESSION['pseudo'] = $_POST['pseudo'] ; 
    $connection = new Connection( $chemin_bdd ) ; // Si le fichier existe on ce connecte
//    $connection ->creationTable( $_SESSION['pseudo'] ) ;
}
else {
    include_once('vue\formulaire_connection.html') ;
}
?>