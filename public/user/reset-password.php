<?php

use Webmin\Template;
use Webmin\User;
use Webmin\Database;

$tpl = new Template($config['template']);

$user = new User();
$data['user'] = $user->getSessionUser();

$data = array_merge($data, ['form' => [
    'action' => htmlspecialchars($_SERVER["PHP_SELF"]),
]]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $db = new Database($config['database']['dsn']);
    $user = new User($db);

    // Process form submission
    $user->password = trim($_POST['password'] ?? '');
    $user->newPassword = trim($_POST['new-password'] ?? '');

    // Validate inputs
    $user->validatePassword();
    $user->validateNewPassword();
    // return form data and errors to template
    $data['form'] = array_merge($data['form'], [
        'password' => $user->password,
        'passwordErr' => $user->passwordErr,
        'passwordInvalid' => !empty($user->passwordErr) ? 'true' : 'false',
        'newPassword' => $user->newPassword,
        'newPasswordErr' => $user->newPasswordErr,
        'newPasswordInvalid' => !empty($user->newPasswordErr) ? 'true' : 'false',
    ]);

    // If no errors, proceed with password reset logic (e.g., update in database)
    if (empty($user->passwordErr) && empty($user->newPasswordErr)) {
        $userData = $user->getSessionUser();
        $user->updatePassword($userData['user_id'], $user->newPassword); 
        
        // Redirect to account page after successful password reset
        header("Location: /user/account.php");
        exit();
    }
}

echo $tpl->render('user/reset-password', $data);
