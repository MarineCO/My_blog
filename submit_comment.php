<?php 
try {
	$comment = $_POST['content'];
	$author = $_POST['author'];
	var_dump($_POST);

	if (empty($comment) && empty($author)) {

		header("Location: index.php");
		exit;

	} else {

		include_once 'index.php';

		$post_id = 1;
		// $post_id = $_POST['post_id'];
		var_dump($post_id);

		$newComment = ORM::for_table('comments')->create();

		$newComment->post_id = $post_id;
		$newComment->content = $comment;
		$newComment->author = $author;

		$newComment->save();

		header("Location: index.php");
		exit;
	}
}catch(exception $e) {
	var_dump($e);
	die();
}
?>