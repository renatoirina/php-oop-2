<?php

require_once __DIR__ . '/../trait/loggable.php';


class Product {
    use Loggable; // Aggiungi il trait

    protected $title;
    protected $price;
    protected $image;
    protected $category;

    public function __construct($title, $price, $image, Category $category) {
        if ($price < 0) {
            throw new InvalidPriceException("Price must be a positive value");
        }
        $this->title = $title;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
    }

    public function getDetails() {
        return [
            'title' => $this->title,
            'price' => $this->price,
            'image' => $this->image,
            'category' => $this->category->getName(),
            'icon' => $this->category->getIcon(),
            'type' => get_class($this)
        ];
    }
}
?>
