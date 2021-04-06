<?php

class Pages extends Controller {
    public function __construct() {
        $this->pageModel = $this->model('Page');
        $this->projetModel = $this->model('Projet');
       
    }
    
    public function index()
    {
        if (isset($_POST['search'])) {
             // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $nom = $_POST['nom'];
            $search= $this->pageModel->search($nom);//module search recherche mots clé
           

            $data = [
                'search' => $search            
            ];
    
            $this->view('main/index', $data); 
        }else{
            $projets= $this->projetModel->listALLprojets();
            $data = [
                'projets' => $projets
            ];
            $this->view('main/index',$data); 
        }

    }

    public function moncv()
    {
        $data = [
            'title' => 'Mon CV'
        ];

        $this->view('main/moncv', $data);
    }

    
    public function about(){
         //page passive pour générer vue informations de l'entreprise
        if (isset($_POST['search'])) {
             // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $nom = $_POST['nom'];
            $search= $this->pageModel->search($nom);
          

            $data = [
                'title' => 'A propos de nous',
                'search' => $search            
            ];
    
            $this->view('main/about', $data);

        }else{
           
            $data = [
                'title' => 'A propos de nous',        
            ];
    
            $this->view('main/about', $data);  
        }

    }

   
    public function contact()
    {
         //page passive pour générer vue contact pour envoyer un message
         if (isset($_POST['search'])) {
             // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $nom = $_POST['nom'];
            $search= $this->pageModel->search($nom);

            $data = [
                'title' => 'Contacts',               
                'search' => $search            
            ];
    
            $this->view('main/contact', $data);

        }else{
           
            $data = [
                'title' => 'Contacts'         
            ];
    
            $this->view('main/contact', $data);  
        }
    }

}