<?php

use Webmin\Template;

$tpl = new Template($config['template']);
$data['content'] = [
           'title' => 'Hello World',
           'heading' => 'Hello World!',
           'content' => 'This is the content of the page.'
        ];
echo $tpl->render('main', $data);
