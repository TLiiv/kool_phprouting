<?php
namespace App\Controllers;
use PDO;
use PDOException;

class AuthController{
    public function login(){
        include 'views/login.php';
    }
    public function register(){
        include 'views/register.php';
    }

    public function store(){
        var_dump($_POST);
        try{
            $conn = new PDO('sqlite:db.sqlite');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO MyGuests (firstname, lastname, email)
            VALUES ('John', 'Doe', 'john@example.com')";

        }catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
       
    }

    
}