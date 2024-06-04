<?php
require_once './models/category.php';
require_once './models/product.php';
require_once './models/food.php';
require_once './models/toy.php';
require_once './models/bed.php';

// Creazione di una categoria di esempio
$categoryDog = new Category("Dog", "🐶");
$categoryCat = new Category("Cat", "🐱");

// Creazione di prodotti di esempio
$products = [
    new Food("Dog Food", 19.99, "./img/dogFood1.jpg", $categoryDog, "2024-12-31"),
    new Toy("Cat Toy", 9.99, "./img/catToy1.jpeg", $categoryCat, "Plastic"),
    new Bed("Dog Bed", 49.99, "./img/dogBed1.jpeg", $categoryDog, "Large", "Cotton")
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Pet Shop</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <?php $details = $product->getDetails(); ?>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="<?= $details['image']; ?>" class="card-img-top" alt="<?= $details['title']; ?>">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?= $details['title']; ?></h5>
                            <p class="card-text"><?= $details['category']; ?> <?= $details['icon']; ?></p>
                            <p class="card-text">Price: €<?= number_format($details['price'], 2); ?></p>
                            <p class="card-text">Type: <?= $details['type']; ?></p>
                            <?php if (isset($details['expirationDate'])) : ?>
                                <p class="card-text">Expiration Date: <?= $details['expirationDate']; ?></p>
                            <?php endif; ?>
                            <?php if (isset($details['material'])) : ?>
                                <p class="card-text">Material: <?= $details['material']; ?></p>
                            <?php endif; ?>
                            <?php if (isset($details['size'])) : ?>
                                <p class="card-text">Size: <?= $details['size']; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- BOOTSTRAP -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>