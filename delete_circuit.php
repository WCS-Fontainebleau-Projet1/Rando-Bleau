<?php
include ('modele/connexion_bdd.php');

if (is_numeric($_GET['id'])){
	echo "id est un nombre";

	$query = $bdd->prepare('DELETE * FROM commentaires WHERE id=?');
	$query->execute(array($_GET['id']));
	$query->closeCursor();

	header('location:info_circuits.php');
} 
else {
	echo "id n'est pas un nombre";
}



 ?>