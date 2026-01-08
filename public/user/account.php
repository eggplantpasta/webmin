<?php

use Webmin\Template;
use Webmin\User;

// redirect to login page if not logged in
$user = new User();
if (!$user->isLoggedIn()) {
    header("Location: /user/login.php");
    exit();
}

$tpl = new Template($config['template']);
$data['user'] = $user->getSessionUser();

echo $tpl->render('user/account', $data);
