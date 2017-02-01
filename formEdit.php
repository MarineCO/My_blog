<?php 

require_once 'vendor/autoload.php';

ORM::configure('mysql:host=localhost;dbname=my_blog');
ORM::configure('username', 'root');
ORM::configure('password', 'root');

$id = $_POST['id'];
var_dump($id);

$editArticle = ORM::for_table('posts')->find_one($id);

$title = $editArticle->title;
$content = $editArticle->content;
$author = $editArticle->author;
$id = $editArticle->id;

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edition d'un nouvel article</title>
</head>
<body>

	<form method="POST" action="submit_postEdition.php">
		
		<input type="hidden" type="text" name="id" value="<?= $id ?>">

		<label for="title">Titre</label>
		<input id="title" type="text" name="title" value="<?= $title ?>">

		<label for="content">Article</label>
		<input id="content" type="text" name="content" value="<?= $content ?>">

		<label for="author">Auteur</label>
		<input id="author" type="text" name="author" value="<?= $author ?>">

		<input value="Editer" type="submit" name="submit">

	</form>

</body>
</html>