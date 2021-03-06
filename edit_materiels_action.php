﻿<?php 

include_once('model/connexion_bdd.php');

if(isset($_POST['image']) && !empty($_POST['image']) && isset($_POST['image_description']) && !empty($_POST['image_description']) &&
   isset($_POST['presentation']) && !empty($_POST['presentation']) && isset($_POST['description']) && !empty($_POST['description']) &&
   isset($_POST['lien']) && !empty($_POST['lien']) && isset($_POST['id']) && !empty($_POST['id'])) {
	  $image = htmlspecialchars($_POST['image']);
	  $image_description = htmlspecialchars($_POST['image_description']);
	  $presentation = htmlspecialchars($_POST['presentation']);
	  $description = htmlspecialchars($_POST['description']);
	  $lien = htmlspecialchars($_POST['lien']);
	  $id = htmlspecialchars($_POST['id']);
	  
	  $req = $bdd->prepare('UPDATE article SET image = :nvimage, image_description = :nvimage_description, presentation = :nvpresentation,
							description = :nvdescription, lien = :nvlien WHERE id = :nvid');
	  $req->execute(array(
						  'nvimage' => $image, 
						  'nvimage_description' => $image_description,
						  'nvpresentation' => $presentation,
						  'nvdescription' => $description,
						  'nvlien' => $lien,
						  'nvid' => $id
						 )
					);
	  
	  $req->closeCursor();
	  echo 'L\'article a bien été modifié ! Vous allez être redirigé dans un instant.';
	  header('refresh:5; url=materiels.php');
   }
	
else{
	echo 'Erreur. Tous les champs n\'ont pas été remplis. Vous allez être redirigé dans 5 secondes';
	header('refresh:5; url=materiels.php');
}