<?php

include ('model/connexion_bdd.php');

if(!empty($_POST['titre']) 
	!empty($_POST['commentaire']));
{
	echo "merci de remplir les champs";
}
else{
	if (is_numeric($_GET['id'])){
		include_once 'model/connexion_bdd.php';
	
$titre = htmlspecialchars($_POST['titre']);
$commentaire = htmlspecialchars($_POST['commentaire']);


$query = $bdd->prepare('UPDATE SET titre = :titre, commentaire = :commentaire WHERE id = :id');
$query->execute(array(
	':titre' =>$titre,
	':commentaire' =>$commentaire
	));

$query->closeCursor();

header('location:info_circuits.php');

	}
	else {
	echo "id n'est pas un nombre"
	header('Refresh: 5;url=index2.php');
}

?>





