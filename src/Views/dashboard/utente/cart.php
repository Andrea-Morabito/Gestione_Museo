<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo '/ProgettoVenereUDA' . '/' . STYLE_PATH . '/style.css'?>">
<body>
    <?php include(__DIR__.'/../includes/navbar.php'); ?>
    
    <h1 class="text-center">Lista Prenotazioni</h1>
    <div>
        <div class="row">
            <?php foreach($prenotazioni as $k => $v){ ?>
                <?php foreach($v as $key => $value){ ?>
                <div class="col-md-4 mb-4" style="margin: 10px">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><strong><?php echo $value['titolo']; ?></strong></h5>
                            <p class="card-text">Data Inizio: <?php echo $value['data_inizio']; ?></p>
                            <p class="card-text">Data Fine: <?php echo $value['data_fine']; ?></p>
                            <form action="/dashboard/event/delete" method="post">
                                <input type="hidden" name="event_title" value="<?php echo $value['titolo']; ?>">
                            </form>
                        </div>
                    </div>
                   
                </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>