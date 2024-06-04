<?php
require_once 'models/category.php';
require_once 'models/product.php';
require_once 'models/food.php';
require_once 'models/toy.php';
require_once 'models/bed.php';

// Creazione di una categoria di esempio
$categoryDog = new Category("Dog", "dogIcon.jpg");
$categoryCat = new Category("Cat", "catIcon.jpg");

// Creazione di prodotti di esempio
$productFood = new Food("Dog Food", 19.99, "dog_food.jpg", $categoryDog, "2024-12-31");
$productToy = new Toy("Cat Toy", 9.99, "cat_toy.jpg", $categoryCat, "Plastic");
$productBed = new Bed("Dog Bed", 49.99, "dog_bed.jpg", $categoryDog, "Large", "Cotton");

// Stampo per verificare
var_dump($categoryDog);
var_dump($categoryCat);
var_dump($productFood);
var_dump($productToy);
var_dump($productBed);
var_dump($productFood->getDetails());
var_dump($productToy->getDetails());
var_dump($productBed->getDetails());
?>
