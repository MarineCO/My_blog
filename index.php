<?php 

require_once 'vendor/autoload.php';

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

	<?php foreach ($data as $article) : ?>

		<h2><?= $article->title; ?></h2>
		<p><?= $article->content; ?></p>
		<h3><?= $article->author; ?> <?= $article->created_at; ?></h3>

		<form method="POST" action="formEdit.php?id=<?= $article->id; ?>">
			<input type="hidden" name="id" value="<?= $article->id; ?>">
			<button>Editer</button>
		</form>

	<?php endforeach; ?>

	<form action="formCreate.php">
		<button>Ajouter un article</button>
	</form>
</body>
</html>