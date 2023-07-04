<?php

trait Weightable {

    private $weight;

    public function getWeight() {

        return $this -> weight;
    }
    public function setWeight($weight) {


        $this -> weight = $weight;
    }
}

class Food extends Product {

    use Weightable;

    private $expireDate;

    public function __construct($name, $price, $description, Category $category, $expireDate, $weight) {

        parent :: __construct($name, $price, $description, $category);

        $this -> setExpireDate($expireDate);

        $this -> setWeight($weight);
    }

    public function getExpireDate() {

        return $this -> expireDate;
    }
    public function setExpireDate($expireDate) {

        $this -> expireDate = $expireDate;
    }
}