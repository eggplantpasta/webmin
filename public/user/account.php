<?php

use Webmin\Template;
use Webmin\User;

$tpl = new Template($config['template']);
$user = new User();

$data['user'] = $user->getSessionUser();

echo $tpl->render('user/account', $data);
