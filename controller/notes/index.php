
<?php
    $config = require "config.php";
    $db = new Database($config['database']);



    // print_r($config);
    // echo "<br>";
    // print_r($config['database']);
    // die();


    $heading = "Notes:";
    $notes = $db->query('select * from notes where user_id = 1')->get();

    require "view/notes/index.view.php";
    
?>

