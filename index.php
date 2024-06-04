<?php
require_once 'models/Category.php';

// Creazione di una categoria di esempio
$categoryDog = new Category("Dog", "dogImage.jpg");

// Stampo per verificare
var_dump($categoryDog);
?>
