<?php
require_once 'category.php';

class Product {
    public $title;
    public $price;
    public $image;
    public $category;
    public $type;

    public function __construct($title, $price, $image, $category, $type) {
        $this->title = $title;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
        $this->type = $type;
    }

    public function getDetails() {
        return [
            'title' => $this->title,
            'price' => $this->price,
            'image' => $this->image,
            'category' => $this->category->name,
            'icon' => $this->category->icon,
            'type' => $this->type
        ];
    }
}
?>
