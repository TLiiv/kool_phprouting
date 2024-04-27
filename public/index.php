<?php  
// spl_autoload_register(function ($class) {
//     $class = substr($class, 4); // Assuming the class name starts with "App\"
//     require_once "src/$class.php";
// }); vendor autoload selle asemel
require __DIR__ . '/../vendor/autoload.php';

use App\Router;
require 'routes.php';

 $router = new Router($_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD']);
 $match = $router->match();
 if($match !== null){
    if(is_callable($match['action'])){
    call_user_func($match['action']);
}else if (is_array($match['action'])){
    $class = $match['action'][0];
    $controller = new $class();
    //võtab tekstina klassinime ja kasutba seda uue objekti loomiseks, 
    //et saaks arrayna functisoone lisada routes.php
    $method=$match['action'][1];
    $controller->$method();
    //dünaamiline classi loomine ja meetodi välja kutsumine
}
 }else{
    echo "Error 404";
 }

// var_dump($router);