<?php
class aff{
    
    public function a( $var )
    {
        echo '<hr><pre><h1> ';
        print_r($var);
        echo '</h1></pre><hr>';
    }

    public function b( $var )
    {
        echo '<hr><h1> ';
        echo $var ;
        echo '</h1><hr>';
    }
}


?>