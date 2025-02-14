
<?php

$routes = require('routes.php');

$uri = parse_url($_SERVER["REQUEST_URI"]);
$path = rtrim($uri['path'], '/'); // Remove trailing slash
$path = $path ?: '/'; // Ensure '/' is default


// print_r($path);
// die();


function routeToController($path, $routes){

    if(array_key_exists($path,$routes)){

        require $routes[$path];
       
    }
    else{
        
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);

    require "view/{$code}.php";
    die();
}


routeToController($path,$routes);

?>

    