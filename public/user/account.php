<?php

use Webmin\Template;
use Webmin\User;

$tpl = new Template($config['template']);
$user = new User();

$data = $user->isLoggedIn() ? $_SESSION['user'] : [];

echo $tpl->render('user/account', $data);
