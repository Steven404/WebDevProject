<?php

$user = 'root';
$pass ='';
db = 'items';

$db = new mysqli('localhost', &user, $pass, $db) or die("Unable to connect");

echo"Connected!";

 ?>
