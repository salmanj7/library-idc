<?php
require_once 'Document.php';
class Magazine extends Document {
    public function __construct($title) {
        parent::__construct($title);
    }

    public function applyDiscount() {
        if (!$this->rentedRecently) {
            echo "20% discount applied for magazine: {$this->title}\n";
        }
    }
}
