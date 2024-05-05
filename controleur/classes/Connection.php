<?php
class Connection
{
    public function __construct($var)
    {   
//        $chemin = $_SERVER['DOCUMENT_ROOT'] .'/model/'.$var ; // Efface-moi
        echo $chemin ; // Efface-moi
        $database = new SQLite3( 'model/'.$var);
    }
}


?>