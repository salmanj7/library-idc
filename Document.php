<?php

abstract class Document {
    protected $title;
    protected $rentedRecently;

    public function __construct($title) {
        $this->title = $title;
        $this->rentedRecently = false;
    }

    public function getTitle() {
        return $this->title;
    }

    abstract public function applyDiscount();
}