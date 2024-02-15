<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <title>METHOD POST</title>
</head>

<body class="bg-dark text-white d-flex justify-content-center align-items-start">

  <img class="position-absolute top-0 start-0" style="margin-left: 1%; margin-top: 1%; width: 3%" src="assets/imgs/phplogo.png" alt="PHP LOGO">
  <div class="container-fluid d-flex flex-column justify-content-center align-items-start p-5 bg-light text-dark">

    <h1 class="fs-3 ms-5 fw-bold text-dark">$_POST / $_SESSION / ARRAY MANIPULATIONS</h1>

    <?php

    session_start();

    ?>

    <?php include('display.php');

    // var_dump($_SESSION['cars']);

    // NOTES DIVERSES
    // POUR AJOUTER UN ELEMENT AU TABLEAU ON UTILISE LA METHODE PUSH
    // POUR SUPPRIMER UN ELEMENT DU TABLEAU ON UTILISE LA METHODE UNSET (SELECTION PAR SON INDEX)
    // unset($_SESSION['cars'][4]);
    // NOTONS QUE LA METHODE UNSET NE REINDEXE PAS LE TABLEAU
    // COMPORTEMENT DE LA METHODE ARRAY_SPLICE
    // array_splice($_SESSION['cars'], 1, 1);
    // ARRAY_POP VA SUPPRIMER LE DERNIER ELEMENT D'UN TABLEAU / CONTRAIRE DE PUSH
    // array_pop($_SESSION['cars']);

    ?>

  </div>

  <form class="sticky-top w-100 d-flex flex-column justify-content-center align-items-center" style="margin-top: 5%;" action="./post_return.php" method="POST">

    <label class="fw-bold" for="">MODELE DU VEHICULE</label>
    <input class="border-0 rounded bg-light w-50" type="text" id="model" name="model"><br>

    <label class="fw-bold" for="">STOCK</label>
    <input class="border-0 rounded bg-light w-50" type="number" id="stock" name="stock"><br>

    <label class="fw-bold" for="">VENDU</label>
    <input class="border-0 rounded bg-light w-50" type="number" id="vendu" name="vendu"><br>

    <label class="fw-bold" for="">IMAGE</label>
    <input class="border-0 rounded bg-light w-50" type="text" id="image" name="image"><br>

    <button type="submit" class="rounded my-3 w-50 btn btn-success fw-bold">AJOUTER UN VEHICULE</button>

    <a class="rounded my-3 w-50 btn btn-secondary fw-bold" href="./database.php">INITIALISER OU REINITIALISER LA SESSION</a>

  </form>

</body>

</html>