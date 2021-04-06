<?php

class Projets extends Controller {
    public function __construct() {
        $this->projetModel = $this->model('Projet');
    }

    

    //Fonction qui crée la vue d'un projet
      public function ficheProjet($id_projet){
                $projet= $this->projetModel->viewProjet($id_projet);
                $images= $this->projetModel->viewImgProjet($id_projet);
                $data = [
                    'projet' => $projet,
                    'images' => $images
                ];
        
                $this->view('projets/ficheProjet', $data);
        }

}