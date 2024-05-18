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
        echo '<hr><h1> ';
        echo $var ;
        echo '</h1><hr>';
    }

    public function f( $var )
    {
        echo '<pre>';
        echo '<hr><h1> ';
        echo 'Le Tableau contient :<br>';
        foreach( $var as $value ){
            echo $value ;
            echo '<br>' ;
        }
        echo '</h1><hr>';
        echo '</pre>' ;
    }
}

$aff = new aff() ;
?>