<?php  
spl_autoload_register(function ($class) {
    $class = substr($class, 4); // Assuming the class name starts with "App\"
    require_once "src/$class.php";
});
use App\Controllers\PublicController;
$router = new App\Router();
$db = new App\DB();
$controller = new PublicController();

var_dump($router);
var_dump($db);
var_dump($controller);

