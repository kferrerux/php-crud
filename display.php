<?php

// BOUCLE PERMETTANT DE LISTER LES VEHICULES
foreach ($_SESSION['cars'] as $car) :

    echo

    '

    <div class="align-self-center card p-3 m-3 bg-light shadow" style="width: 30rem;">
    <img class="p-3 align-self-center card-img-top" style="width: 35%;" src="' . $car['image'] . '" alt="Card image cap">
    <div class="card-body">
    <h5 class="fs-4 card-title text-center">"' . $car['model'] . '"</h5>
    <p class="fw-bold  card-text text-center">Identifiant véhicule : ' . $car['id'] . '</p>
    <p class="fw-bold card-text text-center">Restant : ' . $car['stock'] . '</p>
    <p class="fw-bold  card-text text-center">Vendus : ' . $car['vendu'] . '</p>
    <a href="./details.php?id=' . $car['id'] . '" class="fw-bold my-2 w-100 btn btn-primary">EN SAVOIR PLUS</a>
    <a href="./car_update_form.php?id=' . $car['id'] . '" class="fw-bold my-2 w-100 btn btn-warning">MODIFIER</a>
    <a href="./delete.php?id=' . $car['id'] . '" class="fw-bold my-2 w-100 btn btn-danger">SUPPRIMER</a>
    </div>
    </div>

    ';

endforeach;
