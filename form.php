<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Création d'un nouvel article</title>
</head>
<body>
	
	<form method="POST" action="submit_post.php">
		
		<label for="title">Titre</label>
		<input id="title" type="text" name="title">

		<label for="content">Article</label>
		<input id="content" type="text" name="content">

		<label for="author">Auteur</label>
		<input id="author" type="text" name="author">

		<label for="createdAt">Auteur</label>
		<input id="createdAt" type="date" name="createdAt">

		<input value="Ajouter" type="submit" name="submit">

	</form>

</body>
</html>