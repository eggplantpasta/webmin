<?php

use Webmin\Template;

$tpl = new Template($config['template']);

$data = [];

echo $tpl->render('user/login', $data);
