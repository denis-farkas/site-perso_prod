<?php

class Projet {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    //requête pour créer la vue des produits par catégorie

    public function listProjet() {
        $this->db->query('SELECT * FROM projet JOIN voir ON projet.id_projet=voir.id_projet JOIN img_projet ON voir.id_image=img_projet.id_image');
       
        $projets=$this->db->resultSet();
        return $projets; 
    }

    public function listALLProjets() {
        $this->db->query('SELECT projet.id_projet, titre, titre_resume, nom_stack_front, nom_stack_back FROM projet  
         JOIN stack_front ON projet.id_stack_front=stack_front.id_stack_front 
         JOIN stack_back ON projet.id_stack_back=stack_back.id_stack_back 
        ');
        $data=$this->db->resultSet();
        return $data; 
    }

    public function viewProjet($id_projet) {
        $this->db->query('SELECT * FROM projet  
         JOIN stack_front ON projet.id_stack_front=stack_front.id_stack_front 
         JOIN stack_back ON projet.id_stack_back=stack_back.id_stack_back 
         JOIN versionning ON projet.id_version=versionning.id_version  
         JOIN team ON projet.id_team=team.id_team  
         JOIN ide ON projet.id_ide=ide.id_ide  
         JOIN institution ON projet.id_instit=institution.id_instit  
         WHERE id_projet = :id_projet  
        ');
        $this->db->bind(':id_projet', $id_projet);
        $data=$this->db->single();
        return $data; 
    }

    public function viewImgProjet($id_projet) {
        $this->db->query('SELECT * FROM voir  
         JOIN img_projet ON voir.id_image=img_projet.id_image
         WHERE id_projet = :id_projet  
        ');
        $this->db->bind(':id_projet', $id_projet);
        $data=$this->db->resultSet();
        return $data; 
    }

    public function viewImgTeam($id_projet) {
        $this->db->query('SELECT * FROM voirTeam  
         JOIN img_team ON voirTeam.id_image_team=img_team.id_image_team
         WHERE id_projet = :id_projet  
        ');
        $this->db->bind(':id_projet', $id_projet);
        $data=$this->db->resultSet();
        return $data; 
    }

}