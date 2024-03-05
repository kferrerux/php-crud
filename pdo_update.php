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

    $id = $_POST['id'];

    // RECUPERATION DES DONNEES DU FORMULAIRES
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $model =  $_POST['model'];
        $stock =  $_POST['stock'];
        $vendu =  $_POST['vendu'];
        $image =  $_POST['image'];
        $upimage = $_POST['upimage'];
    }

    // PDO
    /* UPDATE
    --------*/
    try {
        $db = new PDO("mysql: host=localhost; dbname=cars", "root", "");

        // REQUETE
        $sql = "UPDATE car SET model = '$model', vendu = $vendu, stock = $stock, image = '$image' WHERE id = $id";

        // PREPARATION DE LA REQUETE
        $stmt = $db->prepare($sql);

        // EXECUTION DE LA REQUETE
        $stmt->execute();

        // ECHO POUR AFFICHER LA REUSSITE DE LA REQUETE
        echo " Mise à jour de la base de donnée effectuée";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }


    ?>

    <?php

    // header("Location: index.php");

    ?>

</body>

</html>
