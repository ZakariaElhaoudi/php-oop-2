<?php

class Product {

    private $name;
    private $price;
    private $description;
    private $category;

    public function __construct($name, $price, $description, $category) {

        $this -> setName($name);
        $this -> setPrice($price);
        $this -> setDescription($description);
        $this -> setCategory($category);
    }

    public function getName() {

        return $this -> name;
    }

    public function setName($name) {

         $this -> name = $name;
    }

    public function getPrice() {
        
        return $this -> price;
    }

    public function setPrice($price) {

         $this -> price = $price;
    }

    public function getDescription() {
        
        return $this -> description;
    }

    public function setDescription($description) {

         $this -> description = $description;
    }

    public function getCategory() {
        
        return $this -> category;
    }

    public function setCategory($category) {

         $this -> category = $category;
    }
}

$prod1 = new Product("Crocchette per cani", 10.99, "Cibo per cani di tutte le razze", "Cani");
$prod2 = new Product("Snack per cani", 15.00, "Biscotti e ossi per cani di tutte le razze", "Cani");
$prod3 = new Product("Snack per gatti", 10.99, "Snack per gatti", "Gatti");
