<?php
/*
La classe famille fait :

Essais ouverture de la connection avec la bdd 
    -> teste si la bdd existe 
        -> Si oui connection
        -> Si non renvois un message d'erreur

l'utilisateur envoi une famille teste si il existe 
    => si non , création de la famille
    => Si oui message d'erreur 

Elle peux envoyer tout les nomFamille de la table

*/
?>
<?php
class Famille{

    private $base_de_donnee ;

    public function __constuct()  {
        
    }
    
    public function getBdd() {

        $aff = new aff(); // affiche mieux les variables (code personnel ); //Efface-moi
        $results = $this-> base_de_donnee ->query( 'SELECT * FROM famille' ); //
        
        while ( $var = $results -> fetchArray(SQLITE3_ASSOC) ) {
            $affichage[] = $var ;
        };

        return $affichage ;
        
    }

}
?>