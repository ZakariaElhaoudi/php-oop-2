<?php

class Product {

    private $name;
    private $price;
    private $description;
    
    private Category $category;

    public function __construct($name, $price, $description, Category $category) {

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
