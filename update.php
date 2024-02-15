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

<body class="text-white">

    <?php

    // LA PAGE DE TRAITEMENT DE MISE A JOUR DE VEHICULE
    session_start();

    require 'foundIndex.php';
    // var_dump($_POST);
    // die();

    $updateArray = array("id" => $_POST['id'], "model" => $_POST['model'], "vendu" => $_POST['vendu'], "stock" => $_POST['stock'], "image" => $_POST['image']);

    foreach ($_SESSION['cars'] as $car) {
        if ($car['id'] == $_POST['id']) {

            $index = foundIndex($car, $_SESSION['cars']);
            // $index = array_search($car, $_SESSION['cars']);

            $_SESSION['cars'][$index] = $updateArray;

            // header('Location: index.php');
        }
    }

    // var_dump($index);

    ?>

    <?php

    header("Location: index.php");

    ?>

</body>

</html>