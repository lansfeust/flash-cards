<?php
class Connection
{
    private $bd ;

    public function __construct($var)
    {   
        $this->bd  = new SQLite3(  $var );
    }

    public function creationTable($var)
    {   
        $requette = "CREATE TABLE `proformations`.`$var` ( `id` VARCHAR NOT NULL AUTO_INCREMENT , `Question` VARCHAR(550) NOT NULL , `Reponse` VARCHAR(550) NOT NULL , `Niveau` INT(2) NOT NULL DEFAULT '1' , `DateDeVue` INT(10) NOT NULL , `cheminImage` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM; ' ";
        $var->query( $requette);
    }
}


?>