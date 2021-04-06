<?php

session_start();

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// files for decoding jwt will be here
// required to encode json web token
include_once '../config/core.php';
include_once '../libs/php-jwt-master/src/BeforeValidException.php';
include_once '../libs/php-jwt-master/src/ExpiredException.php';
include_once '../libs/php-jwt-master/src/SignatureInvalidException.php';
include_once '../libs/php-jwt-master/src/JWT.php';
use \Firebase\JWT\JWT;
 
  
// include database and object files
include_once '../config/database.php';
include_once '../models/tache.php';
  
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
  
// initialize object
$tache = new Tache($db);


// if jwt is not empty
if($_SESSION['jwt']){
 
        $stmt = $tache->read();
        $num = $stmt->rowCount();
  
        // check if more than 0 record found
        if($num>0){
        
            // products array
            $tache_arr=array();
            $tache_arr["records"]=array();
        
            // retrieve our table contents
            // fetch() is faster than fetchAll()
            // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                // extract row
                // this will make $row['name'] to
                // just $name only
                extract($row);
        
                $tache_item=array(
                    "id" => $id,
                    "text" => $text,
                    "date" => $date,
                    "statut" => $statut
                    
                );
        
                array_push($tache_arr["records"], $tache_item);
            }
    
            // set response code - 200 OK
            http_response_code(200);
        
            // show products data in json format
            echo json_encode($tache_arr);
        }else{
            $tache_arr["records"]=[ "id" => "9999",
            "text" => "Pas de tâche programmée",
            "date" => "0-0-0",
            "statut" => "1"];
           

            // set response code - 404 Not found
            http_response_code(200);
        
            // tell the user no products found
           echo json_encode($tache_arr);
        }
    
}else{
 
    // set response code
    http_response_code(401);
 
    // tell the user access denied
    echo json_encode(array("message" => "Accés refusé."));
}
?>

