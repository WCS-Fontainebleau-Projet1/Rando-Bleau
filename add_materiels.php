<!doctype html>

<html>
<head>
<meta charset='utf-8'/>
<title> Création articles </title>
<link rel='stylesheet' type='text/css' href='css/style.css'>
</head>

<body>
	
	<form method='post' action='add_materiels_action.php'>
	<p>
		<label for='materiel_image'> Logo de la société :</label>
		<input type='text' id='materiel_image' name='image'/>
	</p>
	<p>
		<label for='materiel_image_description'> Description de l'image :</label>
		<input type='text' id='materiel_image_description' name='image_description'/>
	</p>
	<p>
		
		<label for='materiel_presentation'> Courte présentation de la société :</label>
		<input type='text' id='materiel_presentation' name='presentation'/>
	</p>
	<p>
		<label for='materiel_description'> Description de la société :</label>
		<textarea id='materiel_description' name='description'></textarea>
	</p>
	<p>
		<label for='materiel_lien'> Liens vers le site web de la société :</label>
		<input type='text' id='materiel_lien' name='lien'/>
	</p>	
		<input type='submit'/>
		<a href='materiels.php'> retour </a>
	
	</form>

</body>
</html>