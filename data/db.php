<?php 

    require_once("./models/Product.php");
    require_once("./models/Category.php");
    require_once("./models/Toy.php");
    require_once("./models/Food.php");

    $categoryCat = new Category("Gatti");
    $categoryDog = new Category("Cani");


    $foods = [
        $prod1 = new Product("Crocchette per cani", 10.99, "Cibo per cani di tutte le razze", $categoryDog,11,01,2024, 3),
        $prod2 = new Product("Snack per cani", 15.00, "Biscotti per cani di tutte le razze", $categoryDog,11,01,2024, 3),
        $prod3 = new Product("Snack per gatti", 21.99, "Snack per gatti", $categoryCat,11,01,2024, 3),
        $prod4 = new Product("Crocchette per cani", 16.30, "Cibo per cani di tutte le razze", $categoryDog,11,01,2024, 3),
    ];
    

    $toys = [
        $prod1 = new Product("Gioco 1", 10.99, "Per cani di tutte le razze", $categoryDog,"blue", "1-3"),
        $prod2 = new Product("Gioco 2", 15.00, "Per cani di tutte le razze", $categoryDog ,"red", "1-5"),
        $prod3 = new Product("Gioco 3", 21.99, "Per gatti di tutte le razze", $categoryCat ,"green", "1-6"),
        $prod4 = new Product("Gioco 4", 16.30, "Per cani di tutte le razze", $categoryDog ,"black", "1-4"),
    ];
    

   
?>