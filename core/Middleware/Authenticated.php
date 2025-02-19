<?php
namespace Core\Middleware;
class Authenticated
{
    // function to handle Auth Middleware
    public function handle()
    {
        if (! $_SESSION['user'] ?? false) {
            header('location: /');
            exit();
        }
    }
}