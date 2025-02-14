<?php
$config = require "config.php";
$db = new Database($config['database']);
require "function.php";



$heading = 'Note';
$currentUserId = 1;

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid note ID!");
}

$note = $db->query("select * from notes where id = :id", [ 'id'=>$_GET['id'] ])->findOrFail();
// echo "User ID: " . $note['user_id'];
// var_dump($note); 


// if user is unauthorized
authorize((int)$note['user_id'] === $currentUserId);

require "view/notes/show.view.php";

