
<?php

    use core\Database; 

    $config = require base_path("config.php");
    $db = new Database($config['database']);



    // print_r($config);
    // echo "<br>";
    // print_r($config['database']);
    // die();


    $heading = "My-Notes:";
    $notes = $db->query('select * from notes where user_id = 1')->get();

   
    require view("notes/index.view.php",[
       'heading' => $heading, 
       'notes' => $notes
    ]);
    
?>

