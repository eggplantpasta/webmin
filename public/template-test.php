<?php

use Webmin\Template;

$tpl = new Template($config['template']);
$data['content'] = [
           'title' => 'Hello World',
           'heading' => 'Hello World!',
           'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ];
echo $tpl->render('main', $data);
