<?php

class Contact {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    
    public function addContact($data) {
       
        $this->db->query('INSERT INTO contact (civilite, nom, email, date_registre, message)
         VALUES(:civilite, :nom, :email, :date_registre, :message)');


        //Bind values
        $this->db->bind(':civilite', $data['civilite']);
        $this->db->bind(':nom', $data['nom']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':date_registre', $data['date_registre']);
        $this->db->bind(':message', $data['message']);
            
                //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

}