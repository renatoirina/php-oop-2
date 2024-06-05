<?php

class InvalidPriceException extends Exception {
    public function __construct($message = "Invalid price provided") {
        parent::__construct($message);
    }
}
?>
