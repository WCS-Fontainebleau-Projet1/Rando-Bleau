<?php 

include_once('model/connexion_bdd.php');

if(isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id'])){
	
	$id = htmlspecialchars($_GET['id']);
	
	$delete = $bdd->prepare('DELETE FROM materiel WHERE id=?');
	$delete->execute(array($id));
	$delete->closeCursor();
	
	echo 'L\'article a bien été supprimé. Vous allez redirigé dans un instant';
	header('refresh:3; url=materiels.php');
}

else{
	echo 'L\'article à supprimer n\'existe pas. Vous allez redirigé dans un instant';
	header('refresh:3; url=materiels.php');
}