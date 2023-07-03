<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php 
        require_once("./data/db.php");
    ?>
    
    <title> <?php echo $category -> getNameCategory(); ?></title>
</head>
<body>
    <div class="container_fluid">
        <h1 class="text-center" ><?php echo $category -> getNameCategory(); ?></h1>
        <div class="container d-flex justify-content-between">
            <div class="card">
                <div class="card-img">
                    <img src="./img/Cane.jpg" alt="">
                </div>
                <div class="card_body">
                    <h5 class="card-title"><?php echo $prod1->getName(); ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $categoryC -> getNameCategory(); ?></h6>
                    <p class="card-text"><?php echo $prod1->getDescription(); ?></p>
                    <p class="card-text">Prezzo: <?php echo $prod1->getPrice(); ?></p>
                </div>
            </div>
            <div class="card">
            <div class="card-img">
                    <img src="./img/Cane.jpg" alt="">
                </div>
                <div class="card_body">
                    <h5 class="card-title"><?php echo $prod2->getName(); ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $categoryC ->getNameCategory(); ?></h6>
                    <p class="card-text"><?php echo $prod2->getDescription(); ?></p>
                    <p class="card-text">Prezzo: <?php echo $prod2->getPrice(); ?></p>
                </div>
            </div>
            <div class="card">
            <div class="card-img">
                    <img src="./img/Gatto.jpg" alt="">
                </div>
                <div class="card_body">
                    <h5 class="card-title"><?php echo $prod3->getName(); ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $categoryG ->getNameCategory(); ?></h6>
                    <p class="card-text"><?php echo $prod3->getDescription(); ?></p>
                    <p class="card-text">Prezzo: <?php echo $prod3->getPrice(); ?></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>