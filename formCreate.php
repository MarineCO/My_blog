<?php 

require_once 'vendor/autoload.php';

ORM::configure('mysql:host=localhost;dbname=my_blog');
ORM::configure('username', 'root');
ORM::configure('password', 'root');

$createArticle = ORM::for_table('posts')->find_one();

$title = $createArticle->title;
$content = $createArticle->content;
$author = $createArticle->author;
$id = $createArticle->id;

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Création d'un nouvel article</title>
</head>
<body>

	<form method="POST" action="submit_post.php">

		<label for="title">Titre</label>
		<input id="title" type="text" name="title">

		<label for="content">Article</label>
		<input id="content" type="text" name="content">

		<label for="author">Auteur</label>
		<input id="author" type="text" name="author">

		<input value="Ajouter" type="submit" name="submit">

	</form>

</body>
</html>