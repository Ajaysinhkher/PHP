<?php
namespace Core\Middleware;

// main class for middleware holding the data regarding middleware matching:
class Middleware
{

    // creating a array 'MAP' which will have middleware name as key and the class name holding handler function as it's value
    public const MAP = [
        'guest' => Guest::class,
        'auth' => Authenticated::class
    ];
    public static function resolve($key)
    {
        if (!$key) {
            return;
        }
        $middleware = static::MAP[$key] ?? false;
        if (!$middleware) {
            throw new \Exception("No matching middleware found for key '{$key}'.");
        }
        (new $middleware)->handle();
    }
}