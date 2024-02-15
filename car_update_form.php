<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>METHOD POST</title>
</head>

<body class="vh-100 d-flex flex-column justify-content-center align-items-center bg-dark text-white">
    <img class="position-absolute top-0 start-0" style="margin-left: 1%; margin-top: 1%; width: 3%" src="assets/imgs/phplogo.png" alt="PHP LOGO">
    <?php

    // FORMULAIRE PERMETTANT DE METTRE A JOUR UN VEHICULE
    session_start();
    $id = $_GET['id'];
    // echo $id;
    ?>

    <form class="sticky-top w-50 d-flex flex-column justify-content-center align-items-center" style="margin-top: 5%;" action="./update.php" method="POST">

        <input type="text" name="id" value="<?= $id; ?>" hidden>

        <label class="fw-bold" for="">MODELE DU VEHICULE</label>
        <input class="border-1 rounded bg-light w-50" type="text" id="model" name="model"><br>

        <label class="fw-bold" for="">STOCK</label>
        <input class="border-1 rounded bg-light w-50" type="number" id="stock" name="stock"><br>

        <label class="fw-bold" for="">VENDU</label>
        <input class="border-1 rounded bg-light w-50" type="number" id="vendu" name="vendu"><br>

        <label class="fw-bold" for="">IMAGE</label>
        <input class="border-1 rounded bg-light w-50" type="text" id="image" name="image"><br>

        <button type="submit" class="rounded my-3 w-50 btn btn-success fw-bold">CONFIRMATION LES MODIFICATIONS</button>
        <a class="rounded my-3 w-50 btn btn-danger fw-bold" href="./index.php">ANNULER LES MODIFICATIONS</a>

    </form>

</body>

</html>