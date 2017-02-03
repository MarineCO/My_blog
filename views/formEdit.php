<?php
require_once __DIR__.'/../vendor/autoload.php';

ORM::configure('mysql:host=localhost;dbname=my_blog');
ORM::configure('username', 'root');
ORM::configure('password', 'root');

$id = $_POST['id'];

$editArticle = ORM::for_table('posts')->find_one($id);

$title = $editArticle->title;
$content = $editArticle->content;
$author = $editArticle->author;
$id = $editArticle->id;

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edition de l'article sélectionné</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>

	<div class="ui center aligned container">
		<h2>Edition de l'article sélectionné</h2>

		<form class="ui small form" method="POST" action="submit_postEdition.php">

			<div class="field">
				<input type="hidden" type="text" name="id" value="<?= $id ?>">

				<label for="title">Titre</label>
				<input id="title" type="text" name="title" value="<?= $title ?>">
			</div>

			<div class="field">

				<label for="content">Article</label>
				<input id="content" type="text" name="content" value="<?= $content ?>">
			</div>

			<div class="field">
				<label for="author">Auteur</label>
				<input id="author" type="text" name="author" value="<?= $author ?>">
			</div>

			<form method="POST" action="submit_postEdition.php">
				<button class="ui blue submit button">Editer</button>
			</form>
		</form>
	</div>

</body>
</html>