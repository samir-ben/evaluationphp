<?php
class Database{
    private static $dbHost = 'localhost';
    private static $dbName = 'database';
    private static $dbCharset = 'utf8';
    private static $dbUser = "root";
    private static $dbPassword = "root";
    private static $connexion = null;

    public static function connect(){
        try{
            self::$connexion = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName . ";charset=" . self::$dbCharset,self::$dbUser,self::$dbPassword, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::MYSQL_ATTR_LOCAL_INFILE => true));
        }
        catch(Exeption $e){
            die('Error: '. $e->getMessage());
        }
        return self::$connexion;
    }

    public static function disconnect(){
        self::$connexion = null;
    }

    public static function import(){
        // Constrole si la table est vide, et si c'est le cas, on y importe les données du fichier CSV
        $rows = self::$connexion->query('SELECT COUNT(*) FROM call_tickets LIMIT 10;');
        $data = $rows->fetchColumn();
        if ($data == 0) { 
            $insert ="LOAD DATA LOCAL INFILE 'database/tickets_appels_201202.csv' 
                        INTO TABLE call_tickets 
                        FIELDS TERMINATED BY ';' 
                        LINES TERMINATED BY '\\r'
                        IGNORE 2 LINES";
            $importation = self::$connexion->prepare($insert);
            $importation->execute();
        }
    }

}

?>
  