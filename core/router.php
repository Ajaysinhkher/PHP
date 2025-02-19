<?php
namespace Core;
use Core\Middleware\Authenticated;
use Core\Middleware\Guest;
use Core\Middleware\Middleware;

class Router
{
    protected $routes = [];

    public function add($method, $uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'middleware' => null
        ];
        return $this;
    }

    public function get($uri, $controller)
    {
        // $this->add('GET', $uri, $controller);
        return $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller)
    {
        // $this->add('POST', $uri, $controller);
        return $this->add('POST', $uri, $controller);
    }

    public function delete($uri, $controller)
    {
        return $this->add('DELETE', $uri, $controller);
    }

    public function patch($uri, $controller)
    {
       return $this->add('PATCH', $uri, $controller);
    }

    public function put($uri, $controller)
    {
       return $this->add('PUT', $uri, $controller);
    }

    // middleware function 
    public function only($key)
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;
        // dd($this->routes);
        return $this;
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                // applying the ,middleware if routes match using middleware class:
                Middleware::resolve($route['middleware']);
                // now after applying middleware you can access the required route if validated as per condition
                return require base_path($route['controller']);
            }
        }

        $this->abort();
    }

    protected function abort($code = 404)
    {
        http_response_code($code);

        require base_path("view/{$code}.php");

        die();
    }
}




// print_r($path);
// die();


// function routeToController($path, $routes){

//     if(array_key_exists($path,$routes)){

//         require BASE_PATH. $routes[$path];
       
//     }
//     else{
        
//         abort();
//     }
// }

// function abort($code = 404)
// {
//     http_response_code($code);

//     require base_path("view/{$code}.php");
//     die();
// }


?>

    