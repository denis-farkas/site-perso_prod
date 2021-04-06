<?php

class Admin {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function crudUsers(){
        $this->db->query('SELECT * FROM user WHERE is_admin = 0 ORDER BY nom ASC');
        $users=$this->db->resultSet();
        return $users;
    }

    public function view($id) {
        $this->db->query('SELECT prenom, nom, civilite, telephone, email, date_registre, num_rue, nom_rue, batiment, code_postal, ville, pays FROM user JOIN adresse ON user.id_user = adresse.id_user WHERE user.id_user = :id_user AND adresse.domicile = 1 AND is_admin= 0');

        //Bind 
        $this->db->bind(':id_user', $id);
        //méthode row comme objet de database
        $user = $this->db->single();
        return $user;
    }

    public function crudArticles(){
        $this->db->query('SELECT id_article, origine_produit, categorie_produit, genre_produit, nom_produit, nom_taille, nom_couleur, image_produit, date_registre, prix_produit, quantite, remise  FROM article JOIN produit ON article.id_produit = produit.id_produit JOIN taille ON article.id_taille = taille.id_taille JOIN couleur ON article.id_couleur = couleur.id_couleur ');
        $articles=$this->db->resultSet();
        return $articles;
    }

    public function crudProduits(){
        $this->db->query('SELECT * FROM produit');
        $produits=$this->db->resultSet();
        return $produits;
    }


    public function viewArticle($id_article) {
        $this->db->query('SELECT id_article, origine_produit, categorie_produit, genre_produit, nom_produit, nom_taille, nom_couleur, image_produit, date_registre, prix_produit, quantite, remise  FROM article JOIN produit ON article.id_produit = produit.id_produit JOIN taille ON article.id_taille = taille.id_taille JOIN couleur ON article.id_couleur = couleur.id_couleur  WHERE id_article = :id_article');

        //Bind 
        $this->db->bind(':id_article', $id_article);
        //méthode row comme objet de database
        $article = $this->db->single();
        return $article;
    }

    public function viewProduit($id_produit) {
        $this->db->query('SELECT *  FROM produit  WHERE id_produit = :id_produit');

        //Bind 
        $this->db->bind(':id_produit', $id_produit);
        //méthode row comme objet de database
        $produit = $this->db->single();
        return $produit;
    }
    
    
    public function ajoutArticle($article) {
        $creation= date("Y-m-d");
       
        $this->db->query('INSERT INTO article (id_produit, id_taille, id_couleur, date_registre, remise, quantite) 
        VALUES(:id_produit, :id_taille, :id_couleur, :date_registre, :remise, :quantite)');


        //Bind values
            $this->db->bind(':id_produit', $article['id_produit']);
            $this->db->bind(':id_taille', $article['id_taille']);
            $this->db->bind(':id_couleur', $article['id_couleur']);
            $this->db->bind(':date_registre', $creation);
            $this->db->bind(':remise', $article['remise']);
            $this->db->bind(':quantite', $article['quantite']);      
               
        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function ajoutProduit($produit) {
        
        $this->db->query('INSERT INTO produit (origine_produit, categorie_produit, genre_produit, nom_produit, image_produit, prix_produit) 
        VALUES(:origine_produit, :categorie_produit, :genre_produit, :nom_produit, :image_produit, :prix_produit)');


        //Bind values
            $this->db->bind(':origine_produit', $produit['origine_produit']);
            $this->db->bind(':categorie_produit', $produit['categorie_produit']);
            $this->db->bind(':genre_produit', $produit['genre_produit']);
            $this->db->bind(':nom_produit', $produit['nom_produit']);
            $this->db->bind(':image_produit', $produit['image_produit']);
            $this->db->bind(':prix_produit', $produit['prix_produit']);      
               
        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function updateProduit($produit){
            
        $this->db->query('UPDATE produit SET origine_produit= :origine_produit, categorie_produit= :categorie_produit, genre_produit= :genre_produit, nom_produit= :nom_produit, image_produit= :image_produit, prix_produit= :prix_produit WHERE id_produit= :id_produit');
       
        $this->db->bind(':origine_produit', $produit['origine_produit']);
        $this->db->bind(':categorie_produit', $produit['categorie_produit']);
        $this->db->bind(':genre_produit', $produit['genre_produit']);
        $this->db->bind(':nom_produit', $produit['nom_produit']);
        $this->db->bind(':image_produit', $produit['image_produit']);
        $this->db->bind(':prix_produit', $produit['prix_produit']);      
        $this->db->bind(':id_produit', $produit['id_produit']);            
       
            //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }         
    }

    
}  

        
    