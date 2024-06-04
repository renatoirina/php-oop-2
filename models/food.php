<?php
require_once 'product.php';

class Food extends Product {
    public $expirationDate;

    public function __construct($title, $price, $image, $category, $expirationDate) {
        parent::__construct($title, $price, $image, $category, 'Food');
        $this->expirationDate = $expirationDate;
    }

    public function getDetails() {
        $details = parent::getDetails();
        $details['expirationDate'] = $this->expirationDate;
        return $details;
    }
}
?>
