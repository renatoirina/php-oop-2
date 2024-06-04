<?php
require_once 'product.php';

class Bed extends Product {
    public $size;
    public $material;

    public function __construct($title, $price, $image, $category, $size, $material) {
        parent::__construct($title, $price, $image, $category, 'Bed');
        $this->size = $size;
        $this->material = $material;
    }

    public function getDetails() {
        $details = parent::getDetails();
        $details['size'] = $this->size;
        $details['material'] = $this->material;
        return $details;
    }
}
?>
