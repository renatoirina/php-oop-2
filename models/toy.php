<?php
require_once 'product.php';

class Toy extends Product {
    public $material;

    public function __construct($title, $price, $image, $category, $material) {
        parent::__construct($title, $price, $image, $category, 'Toy');
        $this->material = $material;
    }

    public function getDetails() {
        $details = parent::getDetails();
        $details['material'] = $this->material;
        return $details;
    }
}
?>
