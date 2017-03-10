<?php

include_once('model/connexion_bdd.php');

if(isset($_POST['image']) && !empty($_POST['image']) && isset($_POST['image_description']) && !empty($_POST['image_description']) &&
   isset($_POST['presentation']) && !empty($_POST['presentation']) && isset($_POST['description']) && !empty($_POST['description']) &&
   isset($_POST['lien']) && !empty($_POST['lien'])) {
	  $image = htmlspecialchars($_POST['image']);
	  $image_description = htmlspecialchars($_POST['image_description']);
	  $presentation = htmlspecialchars($_POST['presentation']);
	  $description = htmlspecialchars($_POST['description']);
	  $lien = htmlspecialchars($_POST['lien']);
	  
	  $req = $bdd->prepare('INSERT INTO article(image, image_description, presentation, description, lien) VALUES (?,?,?,?,?)');
	  $req->execute(array($image, $image_description, $presentation, $description, $lien));
	  $req->closeCursor();
	  echo 'L\'article a bien été ajouté ! Vous allez être redirigé dans un instant.';
	  header('refresh:5; url=materiels.php');
   }
	
else{
	echo 'Erreur. Tous les champs n\'ont pas été remplis. Vous allez être redirigé dans 5 secondes';
	header('refresh:5; url=materiels.php');
}
	


