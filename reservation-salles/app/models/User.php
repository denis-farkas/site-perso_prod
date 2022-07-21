<?php
class User
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function profil($data)
    {

        $this->db->query('UPDATE utilisateurs SET login= :login, password= :password WHERE id= :id');
        $this->db->bind(':login', $data['login']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':id', $data['id']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function inscription($data)
    {
        $this->db->query('INSERT INTO utilisateurs (login,  password) VALUES(:login, :password)');

        //Bind values
        $this->db->bind(':login', $data['login']);

        $this->db->bind(':password', $data['password']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function connexion($login, $password)
    {
        $this->db->query('SELECT * FROM utilisateurs WHERE login = :login');

        //Bind 
        $this->db->bind(':login', $login);
        //méthode row comme objet de database
        $row = $this->db->single();
        if ($row != FALSE) {
            $hashedPassword = $row->password;

            if (password_verify($password, $hashedPassword)) {
                return $row;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    //méthode finduser par login. login est passée par le Controller.
    public function findUserByLogin($login)
    {
        $this->db->query('SELECT * FROM utilisateurs WHERE login = :login');

        //Bind 
        $this->db->bind(':login', $login);
        //méthode row comme objet de database
        $row = $this->db->single();
        return $row;
    }
}
