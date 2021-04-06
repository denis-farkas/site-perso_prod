<?php

class Admin {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function connexion($login, $password) {
        $this->db->query('SELECT * FROM adm WHERE login = :login');

        //Bind 
        $this->db->bind(':login', $login);
       
        //méthode row comme objet de database
        $admin = $this->db->single();
        if($admin != FALSE){
            $hashedPassword = $admin->password;

            if (password_verify($password, $hashedPassword) ) {
                return $admin;
            } else {
                return false;
            }
        }else{return false;}
       
    }

    public function crudStack_Front(){
        $this->db->query('SELECT * FROM stack_front');
        $result=$this->db->resultSet();
        return $result;
    }

     public function crudMessage(){
        $this->db->query('SELECT * FROM contact order BY date_registre DESC');
        $result=$this->db->resultSet();
        return $result;
    }

    public function addStack_Front($front){
      $this->db->query('INSERT INTO stack_front ( nom_stack_front, image_stack_front)
       VALUES( :nom_stack_front, :image_stack_front)');

        //Bind values
           
            $this->db->bind(':nom_stack_front', $front['nom_stack_front']);
            $this->db->bind(':image_stack_front', $front['image_stack_front']);
                       
        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
    public function update_Stack_Front($front){
        $this->db->query('UPDATE stack_front SET nom_stack_front= :nom_stack_front, image_stack_front= :image_stack_front WHERE id_stack_front= :id_stack_front');
  
          //Bind values
             
              $this->db->bind(':nom_stack_front', $front['nom_stack_front']);
              $this->db->bind(':image_stack_front', $front['image_stack_front']);
              $this->db->bind(':id_stack_front', $front['id_stack_front']);
                         
          //Execute function
          if ($this->db->execute()) {
              return true;
          } else {
              return false;
          }
      }  
    

     public function crudStack_Back(){
        $this->db->query('SELECT * FROM stack_back');
        $result=$this->db->resultSet();
        return $result;
    }

    public function addStack_Back($back){
      $this->db->query('INSERT INTO stack_back ( nom_stack_back, image_stack_back)
       VALUES( :nom_stack_back, :image_stack_back)');

        //Bind values
          
            $this->db->bind(':nom_stack_back', $back['nom_stack_back']);
            $this->db->bind(':image_stack_back', $back['image_stack_back']);
                       
        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    } 
    
    public function update_Stack_Back($back){
        $this->db->query('UPDATE stack_back SET nom_stack_back= :nom_stack_back, image_stack_back= :image_stack_back WHERE id_stack_back= :id_stack_back');
  
          //Bind values
             
              $this->db->bind(':nom_stack_back', $back['nom_stack_back']);
              $this->db->bind(':image_stack_back', $back['image_stack_back']);
              $this->db->bind(':id_stack_back', $back['id_stack_back']);
                         
          //Execute function
          if ($this->db->execute()) {
              return true;
          } else {
              return false;
          }
      }  

    public function crudTeam(){
        $this->db->query('SELECT * FROM team');
        $result=$this->db->resultSet();
        return $result;
    }

    Public function addTeam($team){
      $this->db->query('INSERT INTO team ( nom_team, image_team)
       VALUES( :nom_team, :image_team)');

        //Bind values
           
            $this->db->bind(':nom_team', $team['nom_team']);
            $this->db->bind(':image_team', $team['image_team']);
                       
        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    } 
    
    public function update_Team($team){
        $this->db->query('UPDATE team SET nom_team= :nom_team, image_team= :image_team WHERE id_team= :id_team');
  
          //Bind values
             
              $this->db->bind(':nom_team', $team['nom_team']);
              $this->db->bind(':image_team', $team['image_team']);
              $this->db->bind(':id_team', $team['id_team']);
                         
          //Execute function
          if ($this->db->execute()) {
              return true;
          } else {
              return false;
          }
      }  

     public function crudGraph(){
        $this->db->query('SELECT * FROM graph');
        $result=$this->db->resultSet();
        return $result;
    }

     Public function addGraph($graph){
      $this->db->query('INSERT INTO graph ( nom_graph, image_graph)
       VALUES( :nom_graph, :image_graph)');

        //Bind values
           
            $this->db->bind(':nom_graph', $graph['nom_graph']);
            $this->db->bind(':image_graph', $graph['image_graph']);
                       
        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    } 
    
    public function update_Graph($graph){
        $this->db->query('UPDATE graph SET nom_graph= :nom_graph, image_graph= :image_graph WHERE id_graph= :id_graph');
  
          //Bind values
              
              $this->db->bind(':nom_graph', $graph['nom_graph']);
              $this->db->bind(':image_graph', $graph['image_graph']);
              $this->db->bind(':id_graph', $graph['id_graph']);
                         
          //Execute function
          if ($this->db->execute()) {
              return true;
          } else {
              return false;
          }
      }  

     public function crudVersionning(){
        $this->db->query('SELECT * FROM versionning');
        $result=$this->db->resultSet();
        return $result;
    }

     Public function addVersionning($version){
      $this->db->query('INSERT INTO versionning ( nom_version, image_version)
       VALUES( :nom_version, :image_version)');

        //Bind values
           
            $this->db->bind(':nom_version', $version['nom_version']);
            $this->db->bind(':image_version', $version['image_version']);
                       
        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
    public function update_Versionning($version){
        $this->db->query('UPDATE versionning SET nom_version= :nom_version, image_version= :image_version WHERE id_version= :id_version');
  
          //Bind values
              
              $this->db->bind(':nom_version', $version['nom_version']);
              $this->db->bind(':image_version', $version['image_version']);
              $this->db->bind(':id_version', $version['id_version']);
                         
          //Execute function
          if ($this->db->execute()) {
              return true;
          } else {
              return false;
          }
      }  

      public function crudIde(){
        $this->db->query('SELECT * FROM ide');
        $result=$this->db->resultSet();
        return $result;
    }

     public function addIde($instit){
      $this->db->query('INSERT INTO ide ( nom_ide, image_ide)
       VALUES( :nom_ide, :image_ide)');

        //Bind values
          
            $this->db->bind(':nom_ide', $instit['nom_ide']);
            $this->db->bind(':image_ide', $instit['image_ide']);
                       
        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    } 
    
    public function update_Ide($ide){
        $this->db->query('UPDATE ide SET nom_ide= :nom_ide, image_ide= :image_ide WHERE id_ide= :id_ide');
  
          //Bind values
             
              $this->db->bind(':nom_ide', $ide['nom_ide']);
              $this->db->bind(':image_ide', $ide['image_ide']);
              $this->db->bind(':id_ide', $ide['id_ide']);
                         
          //Execute function
          if ($this->db->execute()) {
              return true;
          } else {
              return false;
          }
      }    

     public function crudInstitution(){
        $this->db->query('SELECT * FROM institution');
        $result=$this->db->resultSet();
        return $result;
    }

     public function addInstitution($instit){
      $this->db->query('INSERT INTO institution ( nom_institution, image_institution)
       VALUES( :nom_institution, :image_institution)');

        //Bind values
          
            $this->db->bind(':nom_institution', $instit['nom_institution']);
            $this->db->bind(':image_institution', $instit['image_institution']);
                       
        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    } 
    
    public function update_Institution($instit){
        $this->db->query('UPDATE institution SET nom_institution= :nom_institution, image_institution= :image_institution WHERE id_instit= :id_instit');
  
          //Bind values
             
              $this->db->bind(':nom_institution', $instit['nom_institution']);
              $this->db->bind(':image_institution', $instit['image_institution']);
              $this->db->bind(':id_instit', $instit['id_instit']);
                         
          //Execute function
          if ($this->db->execute()) {
              return true;
          } else {
              return false;
          }
      }  

     public function crudProjet(){
        $this->db->query('SELECT * FROM projet
         JOIN stack_front ON projet.id_stack_front=stack_front.id_stack_front 
         JOIN stack_back ON projet.id_stack_back=stack_back.id_stack_back 
         JOIN versionning ON projet.id_version=versionning.id_version 
         JOIN graph ON  projet.id_graph=graph.id_graph
         JOIN team ON projet.id_team=team.id_team  
         JOIN ide ON projet.id_ide=ide.id_ide  
         JOIN institution ON projet.id_instit=institution.id_instit  
        ');
        $result=$this->db->resultSet();
        return $result;
    }

    public function addProjet($projet){
        $this->db->query('INSERT INTO projet ( titre, titre_resume, resume, description, date, id_stack_front, id_stack_back, id_version, id_graph, id_team, id_ide, id_instit, link)
         VALUES( :titre, :titre_resume, :resume, :description, :date, :id_stack_front, :id_stack_back, :id_version, :id_graph, :id_team, :id_ide, :id_instit, :link)');
  
          //Bind values
            
              $this->db->bind(':titre', $projet['titre']);
              $this->db->bind(':titre_resume', $projet['titre_resume']);
              $this->db->bind(':resume', $projet['resume']);
              $this->db->bind(':description', $projet['description']);
              $this->db->bind(':date', $projet['date']);
              $this->db->bind(':id_stack_front', $projet['id_stack_front']);
              $this->db->bind(':id_stack_back', $projet['id_stack_back']);
              $this->db->bind(':id_version', $projet['id_version']);
              $this->db->bind(':id_graph', $projet['id_graph']);
              $this->db->bind(':id_team', $projet['id_team']);
              $this->db->bind(':id_ide', $projet['id_ide']);
              $this->db->bind(':id_instit', $projet['id_instit']);
              $this->db->bind(':link', $projet['link']);
                         
          //Execute function
          if ($this->db->execute()) {
              return true;
          } else {
              return false;
          }
      }
      
      public function updateProjet($projet){
        $this->db->query('UPDATE projet SET  titre= :titre, titre_resume= :titre_resume, resume= :resume, description= :description, date= :date, id_stack_front= :id_stack_front, id_stack_back= :id_stack_back, id_version= :id_version, id_graph= :id_graph, id_team= :id_team, id_ide= :id_ide, id_instit= :id_instit, link= :link WHERE id_projet= :id_projet');
  
          //Bind values
            
              $this->db->bind(':titre', $projet['titre']);
              $this->db->bind(':titre_resume', $projet['titre_resume']);
              $this->db->bind(':resume', $projet['resume']);
              $this->db->bind(':description', $projet['description']);
              $this->db->bind(':date', $projet['date']);
              $this->db->bind(':id_stack_front', $projet['id_stack_front']);
              $this->db->bind(':id_stack_back', $projet['id_stack_back']);
              $this->db->bind(':id_version', $projet['id_version']);
              $this->db->bind(':id_graph', $projet['id_graph']);
              $this->db->bind(':id_team', $projet['id_team']);
              $this->db->bind(':id_ide', $projet['id_ide']);
              $this->db->bind(':id_instit', $projet['id_instit']);
              $this->db->bind(':link', $projet['link']);
              $this->db->bind(':id_projet', $projet['id_projet']);
             

                         
          //Execute function
          if ($this->db->execute()) {
              return true;
          } else {
              return false;
          }
      }  

     public function crudContact(){
        $this->db->query('SELECT * FROM contact');
        $result=$this->db->resultSet();
        return $result;
    }


    
}  

        
    