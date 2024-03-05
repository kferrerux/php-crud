<?php

// PDO
/* UPDATE
--------*/
try {
    $db = new PDO("mysql: host=localhost; dbname=cars", "root", "");

    // RECUPERATION DE L'ID DEPUIS LE FORMULAIRE
    $id = $_GET['id'];

    // REQUETE
    $sql = "DELETE FROM car WHERE id= $id";

    // PREPARATION DE LA REQUETE
    $stmt = $db->prepare($sql);

    // EXECUTION DE LA REQUETE
    $stmt->execute();

    // ECHO POUR AFFICHER LA REUSSITE DE LA REQUETE
    echo " Mise à jour de la base de donnée effectuée";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

header("Location: ./index.php");
