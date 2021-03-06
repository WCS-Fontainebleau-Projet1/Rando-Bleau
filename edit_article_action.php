<?php

if(
    empty($_POST['title']) OR
    empty($_POST['content']) OR
    empty($_POST['url_img']) OR
    empty($_POST['alt_img'])) {
    echo "Merci de remplir tout les champs du formulaire.";
}else{
    include_once 'model/connexion_bdd.php';

    $title = htmlspecialchars($_POST['title']);
    $content = htmlspecialchars($_POST['content']);
    $url_img = htmlspecialchars($_POST['url_img']);
    $alt_img = htmlspecialchars($_POST['alt_img']);
    $date_creation = date("y.m.d");
    $id = $_GET['id'];

    $query = $bdd->prepare('UPDATE actu
                            SET title = ?,
                            content = ?,
                            url_img = ?,
                            alt_img = ?,
                            date_creation = ?
                            WHERE id = ?');
    $query->execute(array(
        $title,
        $content,
        $url_img,
        $alt_img,
        $date_creation,
        $id
        ));
    $query->closeCursor();
    header('Location: actualites.php');
}
