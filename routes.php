<?php
 
// return [

//     '/phpLaracast' => 'controller/index.php',
//     '/phpLaracast/about'=> 'controller/about.php',
//     '/phpLaracast/contact'=> 'controller/contact.php',
//     '/phpLaracast/notes'=> 'controller/notes/index.php',
//     '/phpLaracast/note'=> 'controller/notes/show.php',
//     '/phpLaracast/create'=>'controller/notes/create.php', 
//     '/'=>'controller/index.php' ,
    
//     ];


$router->get('/','controller/index.php');
$router->get('/phpLaracast','controller/index.php');
$router->get('/phpLaracast/about','controller/about.php');
$router->get('/phpLaracast/notes','controller/notes/index.php')->only('auth');
$router->get('/phpLaracast/contact','controller/contact.php');
$router->get('/phpLaracast/note','controller/notes/show.php');
$router->get('/phpLaracast/create','controller/notes/create.php');
$router->delete('/phpLaracast/note','controller/notes/destroy.php');
$router->post('/phpLaracast/create','controller/notes/store.php');

$router->get('/phpLaracast/note/edit','controller/notes/edit.php');
$router->patch('/phpLaracast/note/update','controller/notes/update.php');

$router->get('/phpLaracast/register','controller/registration/create.php')->only('guest');
$router->post('/phpLaracast/register','controller/registration/store.php')->only('guest');


$router->get('/phpLaracast/login','controller/sessions/create.php')->only('guest');
$router->post('/phpLaracast/login','controller/sessions/store.php')->only('guest');

$try = $router->delete('/phpLaracast/logout','controller/sessions/destroy.php')->only('auth');

// dd($try);
?> 