<?php

session_start();

// echo $_GET['id'];

// LA BOUCLE DE SUPPRESSION DE VEHICULE
// 2 METHODES PHP UTILISEES => ARRAY_SEARCH && ARRAY_SPLICE
foreach ($_SESSION['cars'] as $car) {
    if ($car['id'] == $_GET['id']) {
        //
        $search = array_search($car, $_SESSION['cars']);
        array_splice($_SESSION['cars'], $search, 1);
    }
}

// var_dump($_SESSION['cars']);

// REDIRECTION VERS LA PAGE D'ACCUEIL
header('Location: ./index.php');
