<?php

class Famille {
    
    public $connect ;
    private static $pdo ;

    public function __construct() {
        
        $this->verif( $_SESSION['bdd'] ) ;
        
    }

    public function getfamille( $var ) {
        
//        $base = $$nom_Utilisateur . 'db' ;
//        $_SESSION['bdd'] -> query('SELECT bar FROM foo') ;

        $query = 'SELECT * FROM famille'; 
        $results = $var->query($query);
//        $tablesquery = $var->query("SELECT * FROM famille ") ; // Encienne version

        
    } 

    private function verif( $var ) {

        $verif = isset( $var );

        if ( $verif ) {
            return 'ok' ;
        }else {
            
            $_SESSION = [] ;
            echo '<META HTTP-EQUIV="Refresh" CONTENT="1; ">' ; // Actualisation de la page
            return 'non' ;

        }
//        $_SESSION['bdd'] ;
    }
}



?>
<!---

);

$results = $db->query('SELECT bar FROM foo');

import sqlite3

try:
    # Crée une connexion à la base de données (ou la crée si elle n'existe pas)
    conn = sqlite3.connect('my.db')

    # Crée un objet curseur pour exécuter des requêtes SQLite
    cur = conn.cursor()

    # Exécute une requête pour récupérer la version de SQLite
    sql = "SELECT sqlite_version();"
    cur.execute(sql)
    res = cur.fetchall()
    print("La version de SQLite est :", res)

    # Ferme le curseur et la connexion
    cur.close()
    conn.close()
    print("La connexion SQLite est fermée")
except sqlite3.Error as error:
    print("Erreur lors de la connexion à SQLite :", error)
-->