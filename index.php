<?php
require_once 'models/category.php';
require_once 'models/product.php';
require_once 'models/food.php';

// Creazione di una categoria di esempio
$categoryDog = new Category("Dog", "dogIcon.jpg");

// Creazione di un prodotto di esempio
$product = new Food("Dog Food", 19.99, "dog_food.jpg", $categoryDog, "2024-12-31");

// Stampo per verificare
var_dump($categoryDog);
var_dump($product);
var_dump($product->getDetails());
?>
