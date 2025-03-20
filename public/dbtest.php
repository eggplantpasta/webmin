<?php

require_once 'env.php';
require_once 'dbutility.php';

$db = dbconnect();

$sql = 'SELECT * FROM users';
foreach ($db->query($sql) as $row) {
  print_r($row); 
}