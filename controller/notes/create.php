<?php 
use core\Database;



$config = require base_path('config.php');
$db = new Database($config['database']);
// $heading ="create-note";

require base_path('core/Validator.php');
$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST')
{

  
    // $validator = new Validator();



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
}

$heading = 'Create-Note:';
$notes = [];

require view("notes/create.view.php",[
    'heading' =>$heading,
    'notes'=>$notes
]);



?>