<?php
class Tache{

    // database connection and table name
    private $conn;
    

    // object properties
    public $id;
    public $text;
    public $date;
    public $statut;
    


    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read products
function read(){

    // select all query
    $query = "SELECT
                *
            FROM
                tache
            ";

    // prepare query statement
    $stmt = $this->conn->prepare($query);

    // execute query
    $stmt->execute();

    return $stmt;
}

// create product
function create(){

    // query to insert record
    $query = "INSERT INTO tache( text, date, statut) VALUES (:text, :date, :statut)";

    // prepare query
    $stmt = $this->conn->prepare($query);

    // sanitize
    $this->text=htmlspecialchars(strip_tags($this->text));
    $this->statut=htmlspecialchars(strip_tags($this->statut));
    

    // bind values
    $stmt->bindParam(":text", $this->text);
    $stmt->bindParam(":date", $this->date);
    $stmt->bindParam(":statut", $this->statut);
   

    // execute query
    if($stmt->execute()){
        return true;
    }

    return false;

}

// used when filling up the update product form
function readOne(){

    // query to read single record
    $query = "SELECT
                *
            FROM
                tache

            WHERE
                id = ?
            ";

    // prepare query statement
    $stmt = $this->conn->prepare( $query );

    // bind id of product to be updated
    $stmt->bindParam(1, $this->id);

    // execute query
    $stmt->execute();

    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // set values to object properties
    $this->text = $row['text'];
    $this->date = $row['date'];
    $this->statut = $row['statut'];
    
}

// update the product
function update(){

    // update query
    $query = "UPDATE
                tache
            SET
                date = :date,
                statut = :statut
            WHERE
                id = :id";

    // prepare query statement
    $stmt = $this->conn->prepare($query);

    // sanitize
    $this->id=htmlspecialchars(strip_tags($this->id)); 
    $this->statut=htmlspecialchars(strip_tags($this->statut));

    // bind new values
    $stmt->bindParam(":id", $this->id); 
    $stmt->bindParam(":date", $this->date);
    $stmt->bindParam(":statut", $this->statut);
   

    // execute the query
    if($stmt->execute()){
        return true;
    }

    return false;
}

// delete the product
function delete(){

    // delete query
    $query = "DELETE FROM tache WHERE id = ?";

    // prepare query
    $stmt = $this->conn->prepare($query);

    // sanitize
    $this->id=htmlspecialchars(strip_tags($this->id));

    // bind id of record to delete
    $stmt->bindParam(1, $this->id);

    // execute query
    if($stmt->execute()){
        return true;
    }

    return false;
}

// search products
function search($keywords){

    // select all query
    $query = "SELECT
                text, date, statut
            FROM
                tache

            WHERE
                text LIKE ? OR date LIKE ? OR statut LIKE ? 
            ";

    // prepare query statement
    $stmt = $this->conn->prepare($query);

    // sanitize
    $keywords=htmlspecialchars(strip_tags($keywords));
    $keywords = "%{$keywords}%";

    // bind
    $stmt->bindParam(1, $keywords);
    $stmt->bindParam(2, $keywords);
    $stmt->bindParam(3, $keywords);
    $stmt->bindParam(4, $keywords);

    // execute query
    $stmt->execute();

    return $stmt;

}



}
?>
