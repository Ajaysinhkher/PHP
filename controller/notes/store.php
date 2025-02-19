<?php
use Core\App;
use Core\Database;
use Core\Validator;

// $config = require base_path('config.php');
// $db = new Database($config['database']);


// Uses the App class to resolve an instance of the Database class
$db = App::resolve(Database::class);

require base_path('core/Validator.php');

$errors  = [];


    if(!Validator::string($_POST['body'],1,1000)){
        $errors['body'] = 'A body with characters in range 0 to 1000 is required!';
    }

   

    if(empty($errors))
    {
        $db->query('INSERT INTO notes (body,user_id) values (:body ,:user_id)',[
            'body'=>$_POST['body'],
            'user_id'=>1
        ]);

    }

    header('location: /phpLaracast/notes')


?>

