<?php 

$heading = 'Create-Note:';


require view("notes/create.view.php",[
    'heading' =>$heading,
    'errors' => []
   
]);



?>