<?php
include 'db_con.php';

$password = md5($_POST['passwrd']);

echo var_dump($password);