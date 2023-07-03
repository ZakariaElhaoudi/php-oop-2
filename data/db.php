<?php 

    require_once("./models/Product.php");
    require_once("./models/Category.php");

    $prod1 = new Product("Crocchette per cani", 10.99, "Cibo per cani di tutte le razze", "Cani");
    $prod2 = new Product("Snack per cani", 15.00, "Biscotti per cani di tutte le razze", "Cani");
    $prod3 = new Product("Snack per gatti", 21.99, "Snack per gatti", "Gatti");
    $prod4 = new Product("Crocchette per cani", 16.30, "Cibo per cani di tutte le razze", "Cani");
    $prod5 = new Product("Snack per cani", 14.00, "Ossi per cani di tutte le razze", "Cani");
    $prod6 = new Product("Cibo per gatti", 12.99, "Cibo per gatti", "Gatti");
    $prod7 = new Product("Snack per cani", 15.00, "Biscotti per cani di tutte le razze", "Cani");
    $prod8 = new Product("Snack per gatti", 21.99, "Snack per gatti", "Gatti");
    
    $categoryG = new Category("Gatti");
    $categoryC = new Category("Cani");

    $category = new Category("Categoria prodotti");

?>