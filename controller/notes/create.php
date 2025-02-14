<?php 


$config = require('config.php');
$db = new Database($config['database']);
$heading ="create-note";

require 'Validator.php';

if($_SERVER['REQUEST_METHOD'] === 'POST')
{

    $errors = [];
    // $validator = new Validator();



    if(!$validator::string($_POST['body'],1,1000)){
        $errors['body'] = 'A body with characters in range 0 to 1000 is required!';
    }

   

    if(empty($errors))
    {
        $db->query('INSERT INTO notes (body,user_id) values (:body ,:user_id)',[
            'body'=>$_POST['body'],
            'user_id'=>1
        ]);

    }
}

require 'view/notes/create.view.php';



?>