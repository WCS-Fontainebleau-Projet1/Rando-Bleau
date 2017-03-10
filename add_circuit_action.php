<?php
include_once 'model/connexion_bdd.php';

if {
	$titre = htmlspecialchars($_POST['titre']);
	$commentaire = htmlspecialchars($_POST['commentaire']);

$query = $bdd->prepare('INSERT INTO commentaire (titre,commentaire) VALUES (?,?)');

$query->execute(array($titre, $commentaire));
$query->closeCursor();


}

header('localisation_student.php');