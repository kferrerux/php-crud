<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>METHOD POST DETAILS</title>
</head>

<body class="bg-dark text-white vh-100 d-flex flex-column text-center justify-content-center align-items-center">
    <img class="position-absolute top-0 start-0" style="margin-left: 1%; margin-top: 1%; width: 3%" src="assets/imgs/phplogo.png" alt="PHP LOGO">
    <?php

    session_start();

    // BOUCLE AFFICHANT LES INFORMATIONS DU VEHICULE (PAR L'ID)
    foreach ($_SESSION['cars'] as $car) {
        if ($car['id'] == $_GET['id']) {

            echo
            '
            <div class="card m-3 bg-dark text-white border-0" style="width: 70rem;">
            <img class="p-3 align-self-center card-img-top" style="width: 20%;" src="' . $car['image'] . '" alt="Card image cap">
            <div class="card-body">
            <h5 class="fs-4 card-title text-center">"' . $car['model'] . '"</h5>
            <p class="fw-bold  card-text text-center">Identifiant véhicule : ' . $car['id'] . '</p>
            <p class="fw-bold card-text text-center">Restant : ' . $car['stock'] . '</p>
            <p class="fw-bold  card-text text-center">Vendus : ' . $car['vendu'] . '</p>
            </div>
            </div>
            ';
        }
    }

    echo "<hr class='mb-5 opacity-50 w-50 border-2 border-primary border rounded'>";
    echo "<a class='btn btn-secondary fw-bold' href='index.php'>VERS LE FORMULAIRE (INDEX)</a>";
