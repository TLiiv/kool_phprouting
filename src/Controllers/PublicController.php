<?php
namespace App\Controllers;;
class PublicController{
    public function index(){
        //var_dump($_GET);
        // if(isset($_GET['name'])){
        //     $name = $_GET['name'];
        // }else{
        //     $name="nameless";
        // }
       session_start(['cookie_httponly'=>true]);
       dump($_SERVER);
        $name = htmlspecialchars($_GET['name']) ?? 'Nameless';
    //     $fruits = ["apple","banana","cherry","pear"];
        include 'views/index.php';
    }

    public function page1(){
        session_start();
        include 'views/page1.php';
    }
    public function page2(){
        include 'views/page2.php';
    }
   
}
