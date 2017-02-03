<?php 
require 'vendor/autoload.php';
try {
	$comment = $_POST['content'];
	$author = $_POST['author'];
	var_dump($_POST);

	if (empty($comment) && empty($author)) {

		header("Location: index.php");
		exit;

	} else {

		ORM::configure('mysql:host=localhost;dbname=my_blog');
		ORM::configure('username', 'root');
		ORM::configure('password', 'root');

		$post_id = $_POST['post_id'];

		$newComment = ORM::for_table('comments')->create();
		$newComment->post_id = $post_id;
		$newComment->content = $comment;
		$newComment->author = $author;

		$newComment->save();

		header("Location: index.php");
		exit;
	}
}catch(Exception $e) {
	var_dump($e);
	die();
}
?>