<?php

if(
    empty($_POST['name']) OR
    empty($_POST['email'])) {
    echo "Merci de remplir au moins votre nom et votre E-mail.";
}else{
    include_once 'model/connexion_bdd.php';

    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);
    $email = htmlspecialchars($_POST['email']);
    $phone= htmlspecialchars($_POST['phone']);

    $query = $bdd->prepare('INSERT INTO contact (name, message, mail, phone) VALUES (?, ?, ?, ?)');
    $query->execute(array(
        $name,
        $message,
        $email,
        $phone
        ));
    $query->closeCursor();
    header('Location: index.php');
}
