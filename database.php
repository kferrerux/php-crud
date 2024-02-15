<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>METHOD POST DATA</title>
</head>

<body class="bg-dark text-white vh-100 d-flex flex-column text-center justify-content-center align-items-center">

    <?php

    // DEMARRAGE DE LA SESSION
    session_start();

    // INITIALISATION D'UN TABLEAU QUI SERA CONTENU DANS LA SUPER GLOBALE $_SESSION
    $_SESSION['cars'] = array(
        array("id" => 1, "model" => "Volvo", "vendu" => 22, "stock" => 18, "image" => "https://upload.wikimedia.org/wikipedia/commons/3/3c/Volvo_Trucks_Logo.png"),
        array("id" => 2, "model" => "BMW", "vendu" => 33, "stock" => 5, "image" => "https://upload.wikimedia.org/wikipedia/commons/4/44/BMW.svg"),
        array("id" => 3, "model" => "Saab", "vendu" => 3, "stock" => 88, "image" => "https://cdn.freebiesupply.com/logos/large/2x/saab-2-logo-png-transparent.png"),
        array("id" => 4, "model" => "Mercedes", "vendu" => 45, "stock" => 2, "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Mercedes-Logo.svg/1200px-Mercedes-Logo.svg.png"),
    );

    var_dump($_SESSION['cars']);

    echo "<br>";
    echo "<h2 class='mt-5'>Données initialisées.</h2>";
    echo "<br>";
    echo "<hr class='mb-5 opacity-50 w-50 border-2 border-primary border rounded'>";
    echo "<a class='btn btn-secondary fw-bold' href='index.php'>RETOUR AU FORMULAIRE (INDEX)</a>";

    ?>

</body>

</html>