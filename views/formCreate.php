<?php
require_once __DIR__.'/../vendor/autoload.php';

ORM::configure('mysql:host=localhost;dbname=my_blog');
ORM::configure('username', 'root');
ORM::configure('password', 'root');

$createArticle = ORM::for_table('posts')->find_one();

$title = $createArticle->title;
$content = $createArticle->content;
$author = $createArticle->author;

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Création d'un nouvel article</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>

	<div class="ui center aligned container">
		<h2>Création d'un article</h2>

		<form class="ui small form" method="POST" action="submit_postCreate.php">

			<div class="field">
				<label for="title">Titre</label>
				<input id="title" type="text" name="title">	
			</div>

			<div class="field">
				<label for="content">Article</label>
				<input id="content" type="text" name="content">
			</div>

			<div class="field">
				<label for="author">Auteur</label>
				<input id="author" type="text" name="author">
			</div>
			<form method="POST" action="submit_postCreate.php">
				<button class="ui blue submit button">Créer</button>
			</form>
		</form>
	</div>

</body>
</html>