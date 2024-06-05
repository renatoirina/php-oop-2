<?php

trait Loggable {
    public function logDetails() {
        $details = $this->getDetails();
        echo "Logging details of product: " . json_encode($details) . "\n";
    }
}
?>
