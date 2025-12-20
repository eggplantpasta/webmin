<?php

use Webmin\Template;
use Webmin\User;

$tpl = new Template($config['template']);

$data = ['form' => [
    'action' => htmlspecialchars($_SERVER["PHP_SELF"])],
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = new User();

    // Process form submission
    $user->username = trim($_POST['username'] ?? '');
    $user->email = trim($_POST['email'] ?? '');
    $user->password = $_POST['password'] ?? '';

    // Validate inputs
    $user->validateUsername();
    $user->validateEmail();
    $user->validatePassword();

    // return form data and errors to template
    $data['form'] = array_merge($data['form'], [
        'username' => $user->username,
        'usernameErr' => $user->usernameErr,
        'usernameInvalid' => !empty($user->usernameErr) ? 'true' : 'false',
        'email' => $user->email,
        'emailErr' => $user->emailErr,
        'emailInvalid' => !empty($user->emailErr) ? 'true' : 'false',
        'password' => $user->password,
        'passwordErr' => $user->passwordErr,
        'passwordInvalid' => !empty($user->passwordErr) ? 'true' : 'false',
    ]);

    // If no errors, proceed with registration logic (e.g., save to database)
    if (empty($user->usernameErr) && empty($user->emailErr) && empty($user->passwordErr) && empty($user->confirmPasswordErr)) {
        // Registration logic here
    }
}



echo $tpl->render('user/register', $data);
