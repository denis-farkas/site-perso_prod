<?php
session_start();

// required headers
header("Access-Control-Allow-Origin: https://www.portefolio.cloudefar.fr/");
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
$email_exists = $admin->emailExists();

// generate json web token
include_once 'config/core.php';
include_once 'libs/php-jwt-master/src/BeforeValidException.php';
include_once 'libs/php-jwt-master/src/ExpiredException.php';
include_once 'libs/php-jwt-master/src/SignatureInvalidException.php';
include_once 'libs/php-jwt-master/src/JWT.php';

use \Firebase\JWT\JWT;

// check if email exists and if password is correct
if ($email_exists) {


    if (password_verify($data->password, $admin->password)) {
        $token = array(
            "iss" => $iss,
            "aud" => $aud,
            "iat" => $iat,
            "nbf" => $nbf,
            "data" => array(
                "id" => $admin->id,
                "login" => $admin->login,
                "email" => $admin->email,
                "password" => $admin->password,
            )
        );

        // set response code
        http_response_code(200);

        // generate jwt
        $jwt = JWT::encode($token, $key);
        $_SESSION['jwt'] = $jwt;
    } else {
        http_response_code(404);
    }
} else {

    // set response code
    http_response_code(401);
}
