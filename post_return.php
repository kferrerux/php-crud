<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>METHOD POST RETURN</title>
</head>

<body class="bg-dark text-white vh-100 d-flex flex-column text-center justify-content-center align-items-center">

    <?php

    // LA PAGE DE TRAITEMENT ($_POST)
    // session_start();


    // CONNEXION PDO
    try {

        $db = new PDO("mysql: host=localhost; dbname=cars", "root", "EdenManon.");
        echo "<strong>Connexion à la base de donnée effectuée</strong>";
    } catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
    }

    /* CONNEXION MYSQLI
    ------------------*/
    // $mysqli = mysqli_connect("localhost", "root", "EdenManon.", "cars");


    // RECUPERATION DES DONNEES DU FORMULAIRES
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $model =  $_POST['model'];
        $stock =  $_POST['stock'];
        $vendu =  $_POST['vendu'];
        $image =  $_POST['image'];
        $upimage = $_POST['upimage'];

        // PDO 
        // INSERT
        $sql = "INSERT INTO car (model, vendu, stock, image) VALUES (?,?,?,?)";
        $stmt = $db->prepare($sql);
        $stmt->execute([$model, $stock, $vendu, $image]);

        // PDO 
        /* FETCH (voir display.php)
        ---------------------------*/
        // $stmt = $db->prepare("SELECT * FROM car");
        // $stmt->execute();
        // $cars = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // PDO
        /* UPDATE (voir pdo.php)
        ---------------------------*/
        // $sql = "UPDATE car SET vendu = ? WHERE id = ?";
        // $stmt = $db->prepare($sql);
        // $stmt->execute([$vendu]);

        // INSERT MYSQLI
        // $sqlInsert  = "INSERT INTO car (model, vendu, stock, image) VALUES ('$model', '$vendu', '$stock', '$image')";
        // mysqli_query($mysqli, $sql);

        echo "<br>";
        echo "<h2>Les données ont été mises à jour.</h2>";
        echo "<br>";
        echo "<hr class='opacity-50 w-50 border-2 border-primary border rounded'>";
        echo "<a class='btn btn-secondary fw-bold' href='index.php'>RETOUR AU FORMULAIRE (INDEX)</a>";
    }

    // ON DYNAMISE L'AFFICHAGE DE L'ID
    // $lastElement = end($_SESSION['cars']);
    // $lastId = $lastElement['id'];
    // var_dump($lastId);

    // LES VARIABLES RECUPEREES DU FORMULAIRE ($_POST)


    // LA NOUVELLE ENTREE (NOUVEAU TABLEAU)
    // $voitures = array(
    //     "id" => $lastId + 1,
    //     "model" => $model,
    //     "vendu" => $vendu,
    //     "stock" => $stock,
    //     "image" => $image,
    //     "upimage" => $upimage
    // );

    // var_dump($voitures['upimage']);

    // ON MET A JOUR LE TABLEAU AVEC LA METHOD ARRAY_PUSH
    // array_push($_SESSION['cars'], $voitures);


    // var_dump($_SESSION['cars']);
    // die;

    ?>

</body>

</html>