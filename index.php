<?php 

require 'vendor/autoload.php';

ORM::configure('mysql:host=localhost;dbname=my_blog');
ORM::configure('username', 'root');
ORM::configure('password', 'root');

$data = ORM::for_table('posts')->find_many();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My blog</title>
</head>
<body>
	<h1>Mon blog</h1>
</body>
</html>