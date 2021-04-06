<?php
// required headers
header("Access-Control-Allow-Origin: https://denis-farkas.students-laplateforme.io");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: *");

 
// database connection will be here
// files needed to connect to database
include_once 'config/database.php';
include_once 'models/administration.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// instantiate user object
$admin = new Administration($db);
 
// check email existence here
// get posted data
$data = json_decode(file_get_contents("php://input"));
 
// set product property values
$admin->email = $data->email;
$admin->login = $data->login;
$admin->password =$data->password;
$email_exists = $admin->emailExists();

// check if email exists and if password is correct
if($email_exists == false){
 
 $create_admin = $admin->create_adm();
    
    if($create_admin){
    // set response code
    http_response_code(200);

    echo json_encode(
            array(
                "message" => "Inscription réalisée.",
            )
        );
    }else{
       
    // set response code
    http_response_code(503);

    } 
}

// signup failed will be here
// signup failed
else{
    // set response code
    http_response_code(401);
 
    // tell the user login failed
    echo json_encode(array("message" => "Email existe déja."));
}
?>
 