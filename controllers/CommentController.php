<?php
define('ROOT', __DIR__);

require ROOT.'/../vendor/autoload.php';

ORM::configure('mysql:host=localhost;dbname=my_blog');
ORM::configure('username', 'root');
ORM::configure('password', 'root');

$comment = $_POST['content'];
$author = $_POST['author'];

if (empty($comment) && empty($author)) {

	header("Location: ../index.php");
	exit;

} else {

	$post_id = $_POST['post_id'];

	$newComment = ORM::for_table('comments')->create();

	$newComment->post_id = $post_id;
	$newComment->content = $comment;
	$newComment->author = $author;

	$newComment->save();

	header("Location: ../index.php");
	exit;
}
?>