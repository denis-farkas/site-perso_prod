<?php
class Users extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }


    public function connexion() {
        $data = [
            'title' => 'Login page',
            'passwordError' => ''
        ];

        //validation des post
        if(isset($_POST['submit'])) {
            function valid_data($data){
                $data = trim($data);/*enlève les espaces en début et fin de chaîne*/
                $data = stripslashes($data);/*enlève les slashs dans les textes*/
                $data = htmlspecialchars($data);/*enlève les balises html comme ""<>...*/
                return $data;
            }
                /*on récupère les valeurs login ,password du formulaire et on y applique
                 les filtres de la fonction valid_data*/
                $login = valid_data($_POST["login"]);
                $password = $_POST["password"];
                    
          
                $loggedInUser = $this->userModel->connexion($login, $password);

                if ($loggedInUser != false) {
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['passwordError'] = 'Le mot de passe ou le login sont incorrects.';

                    $this->view('users/connexion', $data);
                }
            

        } else {
            $data = [
                'passwordError' => ''
            ];
        }
        $this->view('users/connexion', $data);
    }

    public function inscription() {
        $data = [
            'login' => '',
            'password' => '',
            'confirmPassword' => '', 
            'confirmPasswordError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['inscrire'])){
            
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'login' => trim($_POST['login']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'confirmPasswordError' => ''
            ];

      
                if ($data['password'] != $data['confirmPassword']) {
                    $data['confirmPasswordError'] = 'Les passwords ne correspondent pas.';
                }
            

            // error vide
            if (empty($data['confirmPasswordError'])) {

                // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //enregistre utilisateur
                if ($this->userModel->inscription($data)) {
                    //Redirect page connexion
                    header('location: ' . URLROOT . '/users/connexion');
                } else {
                    die('Erreur systéme.');
                }
            }
        }
        $this->view('users/inscription', $data);
    }

    public function profil() {
        $data = [
            'id' => '',
            'login' => '',
            'password' => '',
            'confirmPassword' => '', 
            'confirmPasswordError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['modifier'])){
            
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id' => $_SESSION['id'],
                'login' => trim($_POST['login']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'confirmPasswordError' => ''
            ];
           
      
                if ($data['password'] != $data['confirmPassword']) {
                    $data['confirmPasswordError'] = 'Les passwords ne correspondent pas.';
                }
            

            // error vide
            if (empty($data['confirmPasswordError'])) {

                // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //enregistre utilisateur
                if ($this->userModel->profil($data)) {
                    //Redirect page connexion
                    header('location: ' . URLROOT . '/users/logout');
                } else {
                    die('Erreur systéme.');
                }
            }
        }
        $this->view('users/profil', $data);
    }



   
       


    public function createUserSession($user) {
        $_SESSION['id'] = $user->id;
        $_SESSION['login'] = $user->login;
        header('location:' . URLROOT . '/reservations/planning');
    }

    public function logout() {
        unset($_SESSION['id']);
        unset($_SESSION['login']);
        header('location:' . URLROOT . '/users/connexion');
    }

}

