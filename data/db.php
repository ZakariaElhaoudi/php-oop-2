<?php 

    require_once("./models/Product.php");
    require_once("./models/Category.php");

    $prod1 = new Product("Crocchette per cani", 10.99, "Cibo per cani di tutte le razze", "Cani");
    $prod2 = new Product("Snack per cani", 15.00, "Biscotti e ossi per cani di tutte le razze", "Cani");
    $prod3 = new Product("Snack per gatti", 10.99, "Snack per gatti", "Gatti");
    
    $categoryG = new Category("Gatti");
    $categoryC = new Category("Cani");

    $category = new Category("Categoria prodotti");

?>