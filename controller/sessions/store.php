<?php
use Core\App;
use Core\Database;
use Core\Validator;


$db = App::resolve(Database::class);
$email = $_POST['email'];
$password = $_POST['password'];
$errors = [];

// validate mail-id and pwd as per defined crteria
if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address.';
}
if (!Validator::string($password)) {
    $errors['password'] = 'Please provide a valid password.';
}
if (! empty($errors)) {
    return view('session/create.view.php', [
        'errors' => $errors
    ]);
}



// if valid user entry then check if the user is registered or not:
$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

// use password_verify() for comparison with encrypted pwds in db.
if ($user) {
    if (password_verify($password, $user['password'])) {
        login([
            'email' => $email
        ]);
        header('location: /');
        exit();
    }
}

// if not registerd user return to login page with errors shown :

return view('sessions/create.view.php', [
    'errors' => [
        'email' => 'No matching account found for that email address and password.'
    ]
]);
