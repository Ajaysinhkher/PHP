
<?php

use Core\App;
use Core\Database; 

    // $config = require base_path("config.php");
    // $db = new Database($config['database']);

    $db = App::resolve(Database::class);

    // print_r($config);
    // echo "<br>";
    // print_r($config['database']);
    // die();


    $heading = "My-Notes:";
    $notes = $db->query('select * from notes where user_id = 1')->get();

   
    view("notes/index.view.php",[
       'heading' => $heading, 
       'notes' => $notes
    ]);
    
?>

