<?php  

// header('Content-Type: text/html; charset=utf-8');

class Database{
 
    // specify database credentials

    private static $conn;

    public function __destruct() {
        //self::$_pdo=NULL;
    }

    

    public function __construct() {
        
    }

    // private $db_name = "B201D46V";  //C201D46V
    // private $session = "livr1";
    // private $password = "aaaaaa";
    //public $conn;
 
    // get the database connection
    // public function getConnection(){
 
    //     $this->conn = null;
 
    //     try{
    //         $this->conn = new PDO("ibm:". $this->db_name, $_SESSION['ard465yuhfml47ojvcf'],$_SESSION['hkhynbd65189dgkpbvb'],array(
    //             PDO::ATTR_PERSISTENT => FALSE,
    //             PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            
    //     }catch(PDOException $exception){
    //         echo "Connection error: " . $exception->getMessage();
    //     }
 
    //     return $this->conn;
    // }


    //   public function getConnection($login,$pass){
 
    //     $this->conn = null;
 
    //     try{
    //         $this->conn = new PDO("ibm:". $this->db_name,$login ,$pass,array(
    //             PDO::ATTR_PERSISTENT => FALSE,
    //             PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            
    //     }catch(PDOException $exception){
    //         echo "Connection error: " . $exception->getMessage();
    //     }
 
    //     return $this->conn;
    // }



    public function getConnection() {

        if(self::$conn){return self::$conn;}
        
        $tab = Database::getInit();

        try {
            self::$conn = new PDO($tab['driver'] . $tab['db']);
            
            return self::$conn;
        } catch (Exception $e) {
            die('error' . $e->getMessage());
            return null;
        }
    }



    public static function getInit(){

        $donnees = file_get_contents("../../dBase/configMenu.ini");
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



    // get the database connection
    public function SeConnecter($login,$password){

         if(self::$conn){return self::$conn;}
        
        $tab = Database::getInit();
        
        // $this->conn = null;
        $check=true;
        try{
            self::$conn = new PDO($tab['driver'] . $tab['db'],$login, $password, array(
                PDO::ATTR_PERSISTENT => FALSE,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        $check=false;
        }
 
        return $check;
    }
}
//comment database 

?>