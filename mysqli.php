<?php
// CREATE TABLE `cars`.`car` ( `id` INT NOT NULL AUTO_INCREMENT , `model` TEXT NOT NULL , `vendu` INT NOT NULL , `stock` INT NOT NULL , `image` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

// $mysqli = mysqli_connect("localhost", "root", "EdenManon.", "cars");

$mysqli = mysqli_connect("localhost", "root", "EdenManon.", "cars");
// ON DEFINIT UNE CONDITION PERMETTANT DE S'ASSUERER QUE LA CONNEXION A ETE EFFECTUEE
if ($mysqli) {
    echo "connected";
} else {
    echo "not connected";
}

// header("Location: index.php");

// var_dump($mysqli);
