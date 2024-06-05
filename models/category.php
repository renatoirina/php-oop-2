<?php
class Category {
    protected $name;
    protected $icon;

    public function __construct($name, $icon) {
        $this->name = $name;
        $this->icon = $icon;
    }

    public function getName() {
        // Restituisco il nome della categoria
        return $this->name;
    }

    public function getIcon() {
        // Restituisco l'icona associata alla categoria
        return $this->icon;
    }
}

?>
