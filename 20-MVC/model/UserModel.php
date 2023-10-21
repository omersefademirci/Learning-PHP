<?php 


class UserModel{

    public $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=my_php','root');
    }

    public function listUsers(){
        
        $q = $this->db->query('SELECT * FROM users');

        return $q->fetchAll(PDO::FETCH_ASSOC);
    }
}



?>