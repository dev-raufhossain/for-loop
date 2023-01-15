<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-2">
        <div class="row">
            <?php 
            for ($k = 1; $k <= 4; $k++) {
                ?>
                
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="<div class=" card">
                        <div class="card-header">Class <?php echo $k ;?></div>
                        <div class="card-body">
                            <div class="row">
                                <?php
                                for ($i = 1; $i <= 3; $i++) {
                                ?>
                                    <div class="col-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Secsion<?php echo $i ;?></h5>
                                            </div>
                                            <div class="card-body">
                                                <ol>
                                                    <?php
                                                    for ($j = 1; $j <= 10; $j++) {
                                                    ?>
                                                        <li>Student <?php echo $j; ?></li>
                                                    <?php }
                                                    ?>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
               <?php 
            }?>


     
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>