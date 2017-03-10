<?php
include_once 'model/connexion_bdd.php';

if (!empty($_POST['titre']) AND !empty($_POST['commentaire']))
{
	$titre = htmlspecialchars($_POST['titre']);
	$commentaire = htmlspecialchars($_POST['commentaire']);

	$query = $bdd->prepare('INSERT INTO commentaires (titre,commentaire) VALUES (?,?)');

	$query->execute(array($titre, $commentaire));
	$query->closeCursor();

header('location:info_circuits.php');
}
else {
		echo 'remplissez les champs, merci.';

        header('refresh: 5;url=info_circuits.php');
}


