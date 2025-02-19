<?php
use Core\App;
use Core\Database;
// $config = require base_path("config.php");
// $db = new Database($config['database']);
$db = App::resolve(Database::class);


$heading = 'Note';
$currentUserId = 1;


    $note = $db->query("select * from notes where id = :id", [ 'id'=>$_GET['id'] ])->findOrFail();
    // echo "User ID: " . $note['user_id'];
    // var_dump($note); 
    
    
    // if user is unauthorized
    authorize((int)$note['user_id'] === $currentUserId);
    
    
    view("notes/show.view.php",[
        'heading' => 'Note:',
        'note'=>$note

    ]);









