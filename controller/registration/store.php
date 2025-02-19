<?php
use Core\Validator;
use Core\Database;
use Core\App;


$email = $_POST['email'];
$password = $_POST['password'];

// validate the form inputs:

$errors = [];

if(!Validator::email($email))
{
    $errors['email'] = "please provide a valid email address";
}

if(!Validator::string($password,7,255))
{
    $errors['password'] = 'please provide a password at least seven characters long';

}

if(!empty($errors))
{
    return view('registration/create.view.php',[
        'errors'=>$errors
    ]);
}



$db = APP::resolve(Database::class);

// check if account already exists:
$user = $db->query('select * from users where email = :email',[
    'email'=>$email
])->find();

if($user)
{
    // if exists then redirect to login page:
        header('locatiopn: /');
        exit();
}
else{
    // if user don not exist then register a new user on database, then log th user in and redirect 
    $db->query('INSERT INTO users(email,password) values (:email,:password)',[
    'email'=>$email,
    'password'=>password_hash($password,PASSWORD_BCRYPT)
    ]) ;
}

// mark that the user has logged in:
login($user);

header('location: /');
exit();

?>