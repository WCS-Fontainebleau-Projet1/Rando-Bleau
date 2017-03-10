<?php

if (is_numeric($_GET['id'])) {
    echo "id est un nombre";
    include_once 'model/connexion_bdd.php';

    $query = $bdd->prepare('DELETE FROM actu WHERE id = ?');
    $query->execute(array($_GET['id']));
    $query->closeCursor();

    header('Location: index.php');


}else{
    echo "id n'est pas un nombre";
}

?>
