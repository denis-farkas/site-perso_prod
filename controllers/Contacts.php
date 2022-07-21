<?php

class Contacts extends Controller
{
    public function __construct()
    {
        $this->contactModel = $this->model('Contact');
    }

    //Fonction qui enregistre un nouveau contact
    public function ajoutContact()
    {
        $data = [
            'civilite' => '',
            'nom' => '',
            'email' => '',
            'date_registre' => '',
            'message' => ''
        ];


        if (!isset($_SESSION['envoi']) || $_SESSION['envoi'] != "ok") {

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            $data = [

                'civilite' => trim($_POST['civilite']),
                'nom' => trim($_POST['nom']),
                'email' => trim($_POST['email']),
                'date_registre' => date('Y-m-d h:i:s'),
                'message' => trim($_POST['message'])

            ];

            //enregistre contact
            $envoi = $this->contactModel->addContact($data);



            if ($envoi) {
                $_SESSION['envoi'] = "ok";
                //Redirect 
                header('location:' . WWW_ROOT . 'pages/index');
            } else {
                $_SESSION['envoi'] = "no";
                //Redirect 
                header('location:' . WWW_ROOT . 'pages/index');
            }
        } else {

            header('location:' . WWW_ROOT . 'pages/index');
        }
    }
}
