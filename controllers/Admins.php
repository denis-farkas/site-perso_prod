<?php

class Admins extends Controller
{

    public function __construct()
    {
        $this->adminModel = $this->model('Admin');
    }

    public function connectAdmin()
    {

        function valid_data($data)
        {
            $data = trim($data);/*enlève les espaces en début et fin de chaîne*/
            $data = stripslashes($data);/*enlève les slashs dans les textes*/
            $data = htmlspecialchars($data);/*enlève les balises html comme ""<>...*/
            return $data;
        }

        //validation des post
        if (isset($_POST['connect'])) {


            $login = valid_data($_POST["login"]);
            $password = $_POST["password"];

            $loggedInUser = $this->adminModel->connexion($login, $password);

            if ($loggedInUser == false) {
                $data = ['loginError' => 'Le mot de passe ou l\'email sont incorrects ou vous n\'êtes pas encore inscrit.'];
                $this->view('admins/connexion', $data);
            } else {
                //ouvre une session si le user est bien dans la table user (email, pass)
                $this->createAdminSession($loggedInUser);
            }
        } else {
            $data = ['loginError' => ''];
            $this->view('admins/connexion', $data);
        }
    }

    public function createAdminSession($loggedInUser)
    {
        $_SESSION['login'] = $loggedInUser->login;
        header('location:' . WWW_ROOT . 'admins/crudAdmin');
    }

    public function logout()
    {
        unset($_SESSION['login']);
        header('location:' . WWW_ROOT . 'pages/index');
    }

    public function uploadImage()
    {

        $data = [
            'error' => '',
            'filename' => ''
        ];

        // Check if the form was submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Check if file was uploaded without errors
            if (isset($_FILES["photo"])) {
                $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
                $filename = $_FILES["photo"]["name"];
                $filetype = $_FILES["photo"]["type"];
                $filesize = $_FILES["photo"]["size"];

                // Verify file extension
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                if (!array_key_exists($ext, $allowed)) {
                    $data['error'] = 'Cette  extension d\'image n\'est pas autorisée.';
                    $this->view('admins/uploadImage', $data);
                }

                // Verify file size - 5MB maximum
                $maxsize = 5 * 1024 * 1024;
                if ($filesize > $maxsize) {
                    $data['error'] = 'L\'image dépasse la taille limite de 5MB.';
                    $this->view('admins/uploadImage', $data);
                }

                // Verify MYME type of the file
                if (in_array($filetype, $allowed)) {
                    // Check whether file exists before uploading it
                    if (file_exists("public/img/img_proj/" . $filename)) {
                        $data['error'] = 'Cette  image existe déja.';
                        $this->view('admins/uploadImage', $data);
                    } else {
                        move_uploaded_file($_FILES["photo"]["tmp_name"], "public/img/img_proj/" . $filename);
                        $data['error'] = 'l\'image a bien été enregistrée .';
                        $data['filename'] = $filename;
                        $this->view('admins/uploadImage', $data);
                    }
                } else {
                    $data['error'] = 'Il y a un probléme avec l\'enregistrement. Essayez encore.';
                    $this->view('admins/uploadImage', $data);
                }
            } else {
                $data['error'] = $_FILES["photo"]["error"];
                $this->view('admins/uploadImage', $data);
            }
        }
        $this->view('admins/uploadImage', $data);
    }

    public function crudAdmin()
    {
        if (!empty($_SESSION['login']) && $_SESSION['login'] == "admin") {
            $crudSF = $this->adminModel->crudStack_Front();
            $crudSB = $this->adminModel->crudStack_Back();
            $crudT = $this->adminModel->crudTeam();
            $crudG = $this->adminModel->crudGraph();
            $crudV = $this->adminModel->crudVersionning();
            $crudI = $this->adminModel->crudInstitution();
            $crudId = $this->adminModel->crudIde();

            $data = [
                'crudSF' => $crudSF,
                'crudSB' => $crudSB,
                'crudT' => $crudT,
                'crudG' => $crudG,
                'crudV' => $crudV,
                'crudId' => $crudId,
                'crudI' => $crudI

            ];

            $this->view('admins/crudAdmin', $data);
        } else {
            header('location:' . WWW_ROOT . 'pages/index');
        }
    }

    public function crudMessage()
    {
        if (!empty($_SESSION['login']) && $_SESSION['login'] == "admin") {
            $Message = $this->adminModel->crudMessage();
            $data = [
                'Message' => $Message
            ];

            $this->view('admins/crudMessage', $data);
        } else {
            header('location:' . WWW_ROOT . 'pages/index');
        }
    }


    public function update_Stack_Front()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $front = [
                'id_stack_front' => $_POST['id_stack_front'],
                'nom_stack_front' => $_POST['nom_stack_front'],
                'image_stack_front' => $_POST['image_stack_front']
            ];

            //modifie utilisateur
            if ($this->adminModel->update_Stack_Front($front)) {
                //Redirect page connexion
                header('location: ' . WWW_ROOT . 'admins/crudAdmin');
            } else {
                die('Erreur système.');
            }
        } else {
            $this->view('pages/index');
        }
    }

    public function addStack_Front()
    {

        $front = [
            'nom_stack_front' => '',
            'image_stack_front' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajout'])) {

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $front = [
                'nom_stack_front' => $_POST['nom_stack_front'],
                'image_stack_front' => $_POST['image_stack_front'],
            ];


            if ($this->adminModel->addStack_Front($front)) {

                header('location: ' . WWW_ROOT . 'admins/crudAdmin');
            } else {
                die('Erreur système.');
            }
        } else {
            $this->view('pages/index');
        }
    }



    public function update_Stack_Back()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $back = [
                'id_stack_back' => $_POST['id_stack_back'],
                'nom_stack_back' => $_POST['nom_stack_back'],
                'image_stack_back' => $_POST['image_stack_back']
            ];

            //modifie utilisateur
            if ($this->adminModel->update_Stack_Back($back)) {
                //Redirect page connexion
                header('location: ' . WWW_ROOT . 'admins/crudAdmin');
            } else {
                die('Erreur système.');
            }
        } else {
            $this->view('pages/index');
        }
    }

    public function addStack_Back()
    {

        $back = [
            'nom_stack_back' => '',
            'image_stack_back' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajout'])) {

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $back = [
                'nom_stack_back' => $_POST['nom_stack_back'],
                'image_stack_back' => $_POST['image_stack_back'],
            ];


            if ($this->adminModel->addStack_Back($back)) {

                header('location: ' . WWW_ROOT . 'admins/crudAdmin');
            } else {
                die('Erreur système.');
            }
        } else {
            $this->view('pages/index');
        }
    }




    public function update_Team()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $team = [
                'id_team' => $_POST['id_team'],
                'nom_team' => $_POST['nom_team'],
                'image_team' => $_POST['image_team']
            ];

            //modifie utilisateur
            if ($this->adminModel->update_Team($team)) {
                //Redirect page connexion
                header('location: ' . WWW_ROOT . 'admins/crudAdmin');
            } else {
                die('Erreur système.');
            }
        } else {
            $this->view('pages/index');
        }
    }

    public function addTeam()
    {

        $team = [
            'nom_team' => '',
            'image_team' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajout'])) {

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $team = [
                'nom_team' => $_POST['nom_team'],
                'image_team' => $_POST['image_team'],
            ];


            if ($this->adminModel->addTeam($team)) {

                header('location: ' . WWW_ROOT . 'admins/crudAdmin');
            } else {
                die('Erreur système.');
            }
        } else {
            $this->view('pages/index');
        }
    }


    public function update_Graph()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $graph = [
                'id_graph' => $_POST['id_graph'],
                'nom_graph' => $_POST['nom_graph'],
                'image_graph' => $_POST['image_graph']
            ];

            //modifie utilisateur
            if ($this->adminModel->update_Graph($graph)) {
                //Redirect page connexion
                header('location: ' . WWW_ROOT . 'admins/crudAdmin');
            } else {
                die('Erreur système.');
            }
        } else {
            $this->view('pages/index');
        }
    }

    public function addGraph()
    {

        $graph = [
            'nom_graph' => '',
            'image_graph' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajout'])) {

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $graph = [
                'nom_graph' => $_POST['nom_graph'],
                'image_graph' => $_POST['image_graph'],
            ];


            if ($this->adminModel->addGraph($graph)) {

                header('location: ' . WWW_ROOT . 'admins/crudAdmin');
            } else {
                die('Erreur système.');
            }
        } else {
            $this->view('pages/index');
        }
    }

    public function update_Versionning()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $version = [
                'id_version' => $_POST['id_version'],
                'nom_version' => $_POST['nom_version'],
                'image_version' => $_POST['image_version']
            ];

            //modifie utilisateur
            if ($this->adminModel->update_Versionning($version)) {
                //Redirect page connexion
                header('location: ' . WWW_ROOT . 'admins/crudAdmin');
            } else {
                die('Erreur système.');
            }
        } else {
            $this->view('pages/index');
        }
    }

    public function addVersionning()
    {

        $version = [
            'nom_version' => '',
            'image_version' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajout'])) {

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $version = [
                'nom_version' => $_POST['nom_version'],
                'image_version' => $_POST['image_version'],
            ];


            if ($this->adminModel->addVersionning($version)) {

                header('location: ' . WWW_ROOT . 'admins/crudAdmin');
            } else {
                die('Erreur système.');
            }
        } else {
            $this->view('pages/index');
        }
    }


    public function update_Institution()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $instit = [
                'id_instit' => $_POST['id_instit'],
                'nom_institution' => $_POST['nom_institution'],
                'image_institution' => $_POST['image_institution']
            ];

            //modifie utilisateur
            if ($this->adminModel->update_Institution($instit)) {
                //Redirect page connexion
                header('location: ' . WWW_ROOT . 'admins/crudAdmin');
            } else {
                die('Erreur système.');
            }
        } else {
            $this->view('pages/index');
        }
    }

    public function addInstitution()
    {

        $instit = [
            'nom_institution' => '',
            'image_institution' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajout'])) {

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $instit = [
                'nom_institution' => $_POST['nom_institution'],
                'image_institution' => $_POST['image_institution'],
            ];


            if ($this->adminModel->addInstitution($instit)) {

                header('location: ' . WWW_ROOT . 'admins/crudAdmin');
            } else {
                die('Erreur système.');
            }
        } else {
            $this->view('pages/index');
        }
    }

    public function update_Ide()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $ide = [
                'id_ide' => $_POST['id_ide'],
                'nom_ide' => $_POST['nom_ide'],
                'image_ide' => $_POST['image_ide']
            ];

            //modifie utilisateur
            if ($this->adminModel->update_Ide($ide)) {
                //Redirect page connexion
                header('location: ' . WWW_ROOT . 'admins/crudAdmin');
            } else {
                die('Erreur système.');
            }
        } else {
            $this->view('pages/index');
        }
    }

    public function addIde()
    {

        $ide = [
            'nom_ide' => '',
            'image_ide' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajout'])) {

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $ide = [
                'nom_ide' => $_POST['nom_ide'],
                'image_ide' => $_POST['image_ide'],
            ];


            if ($this->adminModel->addIde($ide)) {

                header('location: ' . WWW_ROOT . 'admins/crudAdmin');
            } else {
                die('Erreur système.');
            }
        } else {
            $this->view('pages/index');
        }
    }

    public function crudProjet()
    {
        if (!empty($_SESSION['login']) && $_SESSION['login'] == "admin") {
            $crudSF = $this->adminModel->crudStack_Front();
            $crudSB = $this->adminModel->crudStack_Back();
            $crudT = $this->adminModel->crudTeam();
            $crudG = $this->adminModel->crudGraph();
            $crudV = $this->adminModel->crudVersionning();
            $crudI = $this->adminModel->crudInstitution();
            $crudId = $this->adminModel->crudIde();
            $crudP = $this->adminModel->crudProjet();

            $data = [
                'crudSF' => $crudSF,
                'crudSB' => $crudSB,
                'crudT' => $crudT,
                'crudG' => $crudG,
                'crudV' => $crudV,
                'crudI' => $crudI,
                'crudId' => $crudId,
                'crudP' => $crudP

            ];

            $this->view('admins/crudProjet', $data);
        } else {
            header('location:' . WWW_ROOT . 'pages/index');
        }
    }

    public function update_Projet()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $projet = [
                'id_projet' => $_POST['id_projet'],
                'titre' => $_POST['titre'],
                'titre_resume' => $_POST['titre_resume'],
                'resume' => $_POST['resume'],
                'description' => $_POST['description'],
                'date' => $_POST['date'],
                'id_stack_front' => $_POST['id_stack_front'],
                'id_stack_back' => $_POST['id_stack_back'],
                'id_version' => $_POST['id_version'],
                'id_graph' => $_POST['id_graph'],
                'id_team' => $_POST['id_team'],
                'id_ide' => $_POST['id_ide'],
                'id_instit' => $_POST['id_instit'],
                'link' => $_POST['link']
            ];

            //modifie utilisateur
            if ($this->adminModel->updateProjet($projet)) {
                //Redirect page connexion
                header('location: ' . WWW_ROOT . 'admins/crudProjet');
            } else {
                die('Erreur système.');
            }
        } else {
            $this->view('pages/index');
        }
    }

    public function addProjet()
    {

        $projet = [

            'titre' => '',
            'titre_resume' => '',
            'resume' => '',
            'description' => '',
            'date' => '',
            'id_stack_front' => '',
            'id_stack_back' => '',
            'id_version' => '',
            'id_graph' => '',
            'id_team' => '',
            'id_ide' => '',
            'id_instit' => '',
            'link' => ''
        ];

        if (!empty($_SESSION['login']) && $_SESSION['login'] == "admin") {
            $crudSF = $this->adminModel->crudStack_Front();
            $crudSB = $this->adminModel->crudStack_Back();
            $crudT = $this->adminModel->crudTeam();
            $crudG = $this->adminModel->crudGraph();
            $crudV = $this->adminModel->crudVersionning();
            $crudI = $this->adminModel->crudInstitution();
            $crudId = $this->adminModel->crudIde();

            $data = [
                'crudSF' => $crudSF,
                'crudSB' => $crudSB,
                'crudT' => $crudT,
                'crudG' => $crudG,
                'crudV' => $crudV,
                'crudI' => $crudI,
                'crudId' => $crudId,

            ];


            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajout'])) {

                // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $projet = [

                    'titre' => $_POST['titre'],
                    'titre_resume' => $_POST['titre_resume'],
                    'resume' => $_POST['resume'],
                    'description' => $_POST['description'],
                    'date' => date('Y-m-d'),
                    'id_stack_front' => $_POST['id_stack_front'],
                    'id_stack_back' => $_POST['id_stack_back'],
                    'id_version' => $_POST['id_version'],
                    'id_graph' => $_POST['id_graph'],
                    'id_team' => $_POST['id_team'],
                    'id_ide' => $_POST['id_ide'],
                    'id_instit' => $_POST['id_instit'],
                    'link' => $_POST['link']
                ];


                if ($this->adminModel->addProjet($projet)) {

                    header('location: ' . WWW_ROOT . 'admins/crudProjet');
                } else {
                    die('Erreur système.');
                }
            } else {
                $this->view('admins/addProjet', $data);
            }
        } else {
            header('location: ' . WWW_ROOT . 'pages/index');
        }
    }
}
