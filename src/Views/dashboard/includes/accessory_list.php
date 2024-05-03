<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aggiungi Accessori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo '/ProgettoVenereUDA' . '/' . STYLE_PATH . '/style.css'?>">
</head>
<body>
    <h1>Aggiungi Accessori</h1>
    <div class="container">
        <form action="/dashboard/add_accessories" method="post">
            <div class="row">
                <?php foreach($accessories as $accessory): ?>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="<?php echo $accessory['IdAccessorio']?>" id="<?php echo $accessory['descrizione']?>" name="accessories[]">
                            <label class="form-check-label" for="<?php echo $accessory['descrizione']?>"><?php echo $accessory['descrizione']?> - <?php echo $accessory['prezzo']?>€</label>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <input type="hidden" value="<?php echo $ticket_name?>" name="ticket_name">
            <button style="width:100%;"type="submit" class="btn btn-primary">Aggiungi</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
