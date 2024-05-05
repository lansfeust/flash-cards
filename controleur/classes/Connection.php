<?php
class Connection
{
    private $bd ;

    public function __construct($var)
    {   
        $this->bd  = new SQLite3(  $var );
    }

    public function creationTable()
    {   
        //$requette = "CREATE TABLE `$var` ( `id` VARCHAR NOT NULL AUTO_INCREMENT , `Question` VARCHAR(550) NOT NULL , `Reponse` VARCHAR(550) NOT NULL , `Niveau` INT(2) NOT NULL DEFAULT '1' , `DateDeVue` INT(10) NOT NULL , `cheminImage` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM; ' ";

        $requette = "CREATE TABLE famille (
            idFamille INTEGER PRIMARY KEY,
            NomFamille TEXT NOT NULL
        );
        " ;
        $this->bd ->query( $requette);
        

        $requette = "CREATE TABLE card (
            idCard INTEGER PRIMARY KEY,
            Question TEXT NOT NULL,
            Reponse TEXT NOT NULL,
            Niveau INTEGER NOT NULL DEFAULT 1,
            DateDeVue INTEGER NOT NULL,
            idFamille INTEGER NOT NULL,
            cheminImage TEXT 
        );
        " ;
        $this->bd ->query( $requette);

        
    }
}


?>