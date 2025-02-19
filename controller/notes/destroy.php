<?php
use Core\App;
use Core\Database;

// $config = require base_path("config.php");
// $db = new Database($config['database']);

$db = App::resolve(Database::class);

$currentId = 1;

    $note  = $db->query('select * from notes where id = :id',[
        'id'=>$_GET['id']
    ])->findOrFail();

    authorize($note['user_id']=== $currentId);


    $db->query('delete from notes where id = :id',[
        'id' => $_GET['id']
    ]);

   
    header('location: /phpLaracast/notes');
    exit();

 ?>