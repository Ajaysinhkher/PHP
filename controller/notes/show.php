<?php

use core\Database;
$config = require base_path("config.php");
$db = new Database($config['database']);
// require "function.php";


$heading = 'Note';
$currentUserId = 25;


if($_SERVER['REQUEST_METHOD']==='POST')
{
    $note = $db->query('select * from notes where id = :id',[
        'id'=> $_GET['id']
    ])->findOrFail();

    authorize((int)$note['user_id'] === $currentUserId);

    $db->query('delete from notes where id= :id',[
        'id'=>$_GET['id']
    ]);

    header('location: /phpLaracast/notes');
    exit();
}

else{

    $note = $db->query("select * from notes where id = :id", [ 'id'=>$_GET['id'] ])->findOrFail();
    // echo "User ID: " . $note['user_id'];
    // var_dump($note); 
    
    
    // if user is unauthorized
    authorize((int)$note['user_id'] === $currentUserId);
    
    
    require view("notes/show.view.php",[
        $heading = 'Note:',
    ]);
}









