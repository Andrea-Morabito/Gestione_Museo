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
    <?php include(__DIR__.'/../includes/navbar.php')?>

    <h1 style="margin: 1em 0;">Riassunto acquisto biglietto <?php echo $nome_biglietto; ?></h1>
    <div style="display:flex; justify-content: center; align-items:center;">
        <h2 style="font-size:1.5em;font-weight:bold;">Riepilogo</h2>
    </div>
    <div>
    <div>
    <div>
    <div class="accordion" id="accessoryAccordion">
            <div class="accordion-item">
                <div class="accordion-collapse collapse show">
                    <div class="accordion-body">
                        <!-- Contenuto dell'accessorio -->
                        <ul class="list-group">
                            <li class="list-group-item "><span class="accessory_heading"><?php echo $nome_biglietto ?></span></li>
                            <li class="list-group-item">Prezzo: <?php echo $prezzo_biglietto?>€</li>
                            <!-- Aggiungi altri dettagli se necessario -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php foreach($riepilogo as $k => $v): ?>
        <div class="accordion" id="accessoryAccordion">
            <div class="accordion-item">
                <div class="accordion-collapse collapse show">
                    <div class="accordion-body">
                        <!-- Contenuto dell'accessorio -->
                        <ul class="list-group">
                            <li class="list-group-item "><span class="accessory_heading"><?php echo $v['descrizione'] ?></span></li>
                            <li class="list-group-item">Prezzo: <?php echo $v['prezzo']?>€</li>
                            <!-- Aggiungi altri dettagli se necessario -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
    </div>
    <div >
        <div class="card center">
            <div class="card-body">
                <h5 class="card-title accessory_heading">Importo Totale</h5>
                <p style="text-align:center;" class="card-text"><strong><?php echo $totale ?></strong>€</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>