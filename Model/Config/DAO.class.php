<?php

class DAO_DAO_MODEL {

    private static $_pdo;

    public function __destruct() {
        //self::$_pdo=NULL;
    }

    

    public function __construct() {
        
    }

    public function getPDO() {

        if(self::$_pdo){return self::$_pdo;}
        
        $tab = DAO_DAO_MODEL::getInit();

        try {
            self::$_pdo = new PDO($tab['driver'] . $tab['db'], $_SESSION['ard465yuhfml47ojvcf'], $_SESSION['hkhynbd65189dgkpbvb'], array(
                PDO::ATTR_PERSISTENT => FALSE,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            
            return self::$_pdo;
        } catch (Exception $e) {
            die('error' . $e->getMessage());
            return null;
        }
    }

    public static function getInit() {
        $donnees = file_get_contents("init.ini");
        $tab = explode(";", $donnees);
        $config = array();
        for ($i = 0; $i < sizeof($tab) - 1; $i++) {
            
            $t = explode("=", $tab[$i]);
            $index = explode("#", trim($t[0]));
            if (trim($index[2]) == 'BIB') {
                $bt = explode(",", trim($t[1]));

                for ($k = 0; $k < sizeof($bt); $k++) {
                    $bib = explode(":", trim($bt[$k]));
                    $config[trim($bib[0])] = trim($bib[1]);
                }
            } else {
                $config[trim($index[2])] = trim($t[1]);
            }
        }

        return $config;
    }

}

?>