<?php

class Category {

    private $nameCategory;

    public function __construct($nameCategory) {

        $this -> setNameCategory($nameCategory);
    }

    public function getNameCategory() {
        
        return $this -> nameCategory;
    }

    public function setNameCategory($nameCategory) {

         $this -> nameCategory = $nameCategory;
    }
}
?>