'<?php

$title = $_POST['title'];
$content = $_POST['content'];
$author = $_POST['author'];
$createdAt = $_POST['createdAt'];


if (strlen($title) == 0) {
	include_once 'form.php';
	echo '<h3>Erreur : Le titre n\'est pas défini</h3>';
} 

if (strlen($content) == 0) {
	include_once 'form.php';
	echo '<h3>Erreur : Le contenu de l\'article n\'est pas défini</h3>';
} 

if (strlen($author) == 0) {
	include_once 'form.php';
	echo '<h3>Erreur : L\'auteur n\'est pas défini</h3>';
	exit;
} 

if (strlen($title) > 0 && strlen($content) > 0 && strlen($author) > 0) {

	include_once 'index.php';

	$newArticle = ORM::for_table('posts')->create();

	$newArticle->title = $title;
	$newArticle->content = $content;
	$newArticle->author = $author;
	$newArticle->created_at = $createdAt;

	$newArticle->save();

	header("Location: index.php");
	exit;
}
?>