<?php
$title = $_POST['title'];
$content = $_POST['content'];
$author = $_POST['author'];

$id = $_POST['id'];
var_dump($id);
if (strlen($title) > 0 && strlen($content) > 0 && strlen($author) > 0) {

	include_once 'index.php';

	$editArticle = ORM::for_table('posts')->find_one($id);

	$editArticle->title = $title;
	$editArticle->content = $content;
	$editArticle->author = $author;

	$editArticle->save();

	header("Location: index.php");
	exit;
}
?>