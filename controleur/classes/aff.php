<?php
class aff{
    
    public function a( $var , $titre='La variable contient :<br>')
    {
        echo '<hr><u><h1> ';
        print( $titre ) ;
        echo '</u></h1> ';
        echo '<pre><h1> ';
        print_r($var);
        echo '<u><br>Fin d affichage</u><hr>';
        echo '</h1></pre><hr>';
    }

    public function b( $var )
    {
        echo '<hr> ';
        
        echo <<<'AOE'
                <hr>
                <style>
                .mon_alerte {
                    text-align: center; //Centre le texte 
                    border: 25px solid red; // Ajoute une bordure rouge
                    font-weight: bold; //Met le texte en gras 
                    text-decoration: underline; // Souligne le texte 
                    font-size: 150%; // Augmente la taille du texte à 150% 
                    background-color: beige; // Définit un fond beige 
                  }
                </style>
                <div class='mon_alerte'>
                <h1>La variable contient :</h1><br>
        AOE;
        echo $var ;
        echo '<hr>';
    }

    public function f( $var )
    {
        
echo <<<'AOE'
        <hr>
        <style>
        .mon_alerte {
            text-align: center; //Centre le texte 
            border: 25px solid red; // Ajoute une bordure rouge
            font-weight: bold; //Met le texte en gras 
            text-decoration: underline; // Souligne le texte 
            font-size: 150%; // Augmente la taille du texte à 150% 
            background-color: beige; // Définit un fond beige 
          }
        </style>
        <div class='mon_alerte'>
        <h1>Le Tableau contient :</h1><br>
AOE;

        foreach( $var as $clef=>$value ){
            echo $clef.'=>'.$value ;
            echo '<br>' ;
        }
        echo '</div><hr>';
        echo '</pre>' ;
    }
}

?>