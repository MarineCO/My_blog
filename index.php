<?php 

require_once 'vendor/autoload.php';

ORM::configure('mysql:host=localhost;dbname=my_blog');
ORM::configure('username', 'root');
ORM::configure('password', 'root');


// - récupérer id du post dans table posts
// - associé cet id au post_id de la table comments


$dataArticle = ORM::for_table('posts')->find_many();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My blog</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>

	<div class="ui segment">
		<h1 class="ui center aligned header">Mon blog</h1>
	</div>

	<table class="ui celled padded table">
		<thead>
			<tr>
				<th>Titre</th>
				<th>Article</th>
				<th>Auteur</th>
				<th>Créé le</th>
				<th>Poster un commentaire</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($dataArticle as $article) : ?>
				<tr>
					<td class="ui center aligned header">
						<h2><?= $article->title; ?></h2>
					</td>
					<td class="ui center aligned header">
						<p><?= $article->content; ?></p>
						<form method="POST" action="formEdit.php?id=<?= $article->id; ?>">
							<input type="hidden" name="id" value="<?= $article->id; ?>">
							<button>Editer</button>
						</form>
					</td>
					<td class="ui center aligned header">
						<h3><?= $article->author; ?></h3>
					</td>
					<td class="ui center aligned header">
						<h3><?= $article->created_at; ?></h3>
					</td>
					<td class="ui center aligned header">
						<form method="POST" action="submit_comment.php">

							<label for="content">Commentaire</label>
							<input id="content" name="content" type="text">

							<label for="author">Auteur</label>
							<input id="author" name="author" type="text">

							<input value="Valider" type="submit" name="submit">

						</form>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<form action="formCreate.php">
		<button>Ajouter un article</button>
	</form>
</body>
</html>