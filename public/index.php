
<?php 
session_start();
const BASE_PATH = __DIR__. '/../';
// var_dump(BASE_PATH);
require  BASE_PATH. "core/function.php";


// dd($_SERVER['REQUEST_URI']);
 


// to get the class loaded dynamically whenever it is required 
spl_autoload_register(function ($class){
    
    // replace required to make usage of namespace  properly
    $class = str_replace('\\','/',$class);

    require base_path("{$class}.php");
    

});

?>
<?php 


require base_path('bootstrap.php');
$router = new \core\Router();

$routes = require base_path('routes.php');
$uri = parse_url($_SERVER["REQUEST_URI"]);
$path = rtrim($uri['path'], '/'); // Remove trailing slash
$path = $path ?: '/'; // Ensure '/' is default
// routeToController($path,$routes);


$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($path,$method);


?>

