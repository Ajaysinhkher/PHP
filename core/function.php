<?php
use Core\Response;

    function dd($value)
    {
        echo "<pre>";
        var_dump($value);
        echo "</pre>";
        die();
    }


    function URLIs($value){
        return $_SERVER['REQUEST_URI']===$value;
    }

    function authorize($condition,$status=Response::FORBIDDEN){
        if(!$condition){
            abort($status);
        }
    }

    function base_path($path)
    {
       
        return BASE_PATH . $path; 
    }

    function view($path, $attributes = [])
    {
      
        
        extract($attributes);
        require base_path('view/'. $path);   

    }

    function login($user)
    {
        $_SESSION['user'] = [
        'email' => $user['email']
    ];
     session_regenerate_id(true);    
    }

    // function to logout a user:
    function logout()
    {
        // empty the session array and then destroy it
        $_SESSION = [];
        session_destroy();

        // also delete the cookies from browser which where created during session creation
        $params = session_get_cookie_params();
        setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
    }


?>