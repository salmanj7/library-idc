<?php

require_once 'Document.php';

class HistoricalScript extends Document {
    public function __construct($title) {
        parent::__construct($title);
    }

    public function applyDiscount() {
        if (!$this->rentedRecently) {
            echo "20% discount applied for historical script: {$this->title}\n";
        }
    }
}
