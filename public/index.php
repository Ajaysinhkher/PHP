
<?php 

const BASE_PATH = __DIR__. '/../';
// var_dump(BASE_PATH);
require  BASE_PATH. "core/function.php";


// dd($_SERVER['REQUEST_URI']);
 


// to get the class loaded dynamically whenever it is required 
spl_autoload_register(function ($class){
    
    // replace required to make usage of namespace  properly
    $class = str_replace('\\','/',$class);
    
    require base_path("{$class}.php");
    

});

?>
<?php require  base_path("core/router.php")?>
