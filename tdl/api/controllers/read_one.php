<?php
// required headers

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

  
// include database and object files
include_once '../config/database.php';
include_once '../models/tache.php';
  
// get database connection
$database = new Database();
$db = $database->getConnection();
  
// prepare product object
$tache = new Tache($db);
  
// set ID property of record to read
$tache->id = isset($_GET['id']) ? $_GET['id'] : die();
  
// read the details of product to be edited
$tache->readOne();
  
if($tache->text!=null){
    // create array
    $tache_arr = array(
        "id" =>  $tache->id,
        "text" => $tache->text,
        "date" => $tache->date,
        "statut" => $tache->statut
       
  
    );
  
    // set response code - 200 OK
    http_response_code(200);
  
    // make it json format
    echo json_encode($tache_arr);
}
  
else{
    // set response code - 404 Not found
    http_response_code(404);
  
    // tell the user product does not exist
    echo json_encode(array("message" => "Tâche n'existe pas."));
}
?>