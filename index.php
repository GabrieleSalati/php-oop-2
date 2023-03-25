<?php

include_once __DIR__ . "/data/products.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Extends</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <h1>PRODUCTS</h1>
        <div class="row">
            <?php foreach ($beds as $bed) : ?>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $bed->name ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $bed->name ?></h6>
                        <p class="card-text"><?= $bed->$availability ?></p>
                        <p><?= $bed->description ?></p>
                        <p><?= $bed->$price ?></p>
                        <p><?= $bed->size ?></p>
                        <p><?= $bed->material ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
        <div class="row">
            <?php foreach ($food as $food) : ?>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $food->name ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $food->name ?></h6>
                        <p class="card-text"><?= $food->$availability ?></p>
                        <p><?= $food->description ?></p>
                        <p><?= $food->$price ?></p>
                        <p><?= $food->size ?></p>
                        <p><?= $food->main_ingredient ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
        <div class="row">
            <?php foreach ($toys as $toy) : ?>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $toy->name ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $toy->name ?></h6>
                        <p class="card-text"><?= $toy->$availability ?></p>
                        <p><?= $toy->description ?></p>
                        <p><?= $toy->$price ?></p>
                        <p><?= $toy->color ?></p>
                        <p><?= $toy->material ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</body>

</html>