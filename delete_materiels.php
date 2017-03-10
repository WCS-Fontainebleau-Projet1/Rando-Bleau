<?php 

include_once('model/connexion_bdd.php');

if(is_numeric($_GET['id'])){
	
	$id = $_GET['id'];
	
	$delete = $bdd->prepare('DELETE FROM article WHERE id=?');
	$delete->execute(array($id));
	$delete->closeCursor();
	
	echo 'L\'article a bien été supprimé. Vous allez redirigé dans 5 secondes';
	header('refresh:5;url=materiels.php');
}

else{
	echo 'L\'article à supprimer n\'existe pas. Vous allez redirigé dans 5 secondes';
	header('refresh:5;url=materiels.php');
}