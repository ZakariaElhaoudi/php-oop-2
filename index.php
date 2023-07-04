<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php 
        require_once("./data/db.php");
    ?>
    
    <title> E-commerce</title>
</head>
<body class="bg-dark">
    <div class="container_fluid ">
        <h1 class="text-center" style="color: white;">Categoria prodotti</h1>
        <div class="container ">
            <div class="row py-2"> 
                <?php foreach ($foods as $food) { ?>
                    <div class="col-3 py-2">
                        <div class="card p-2">
                            <div class="card-img-top">
                                <img src="./img/prodotti.jpg" alt="">
                            </div>
                            <div class="card_body">
                                <h5 class="card-title"><?php echo $food->getName(); ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $food -> getCategory() -> getName(); ?></h6>
                                <p class="card-text"><?php echo $food->getDescription(); ?></p>
                                <p class="card-text">Prezzo: <?php echo $food->getPrice(); ?></p>
                                <p class="card-text">Data scadenza: <?php echo $food->getExpireDate(); ?></p>
                                <p class="card-text">Peso: <?php echo $food->getWeight(); ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="row py-2"> 
                <?php foreach ($toys as $toy) { ?>
                    <div class="col-3 py-2">
                        <div class="card p-2">
                            <div class="card-img-top">
                                <img src="./img/prodotti.jpg" alt="">
                            </div>
                            <div class="card_body">
                                <h5 class="card-title"><?php echo $toy->getName(); ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $toy -> getCategory() -> getName(); ?></h6>
                                <p class="card-text"><?php echo $toy->getDescription(); ?></p>
                                <p class="card-text">Prezzo: <?php echo $toy->getPrice(); ?></p>
                                <p class="card-text">Colore: <?php echo $toy->getColor(); ?></p>
                                <p class="card-text">Età <?php echo $toy->getAge(); ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>