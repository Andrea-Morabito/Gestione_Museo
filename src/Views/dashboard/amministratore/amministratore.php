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
    <h1>Amministratore</h1>
    
    <div style="margin: 1em 0" class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><strong>Aggiungi Biglietto</strong></h5>
                    <p class="card-text">Clicca qui per aggiungere un nuovo biglietto.</p>
                    
                    <a href="/dashboard/tickets/add" class="btn btn-primary">Vai</a>
                    
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><strong>Gestisci Utenti</strong></h5>
                    <p class="card-text">Clicca qui per gestire gli utenti.</p>
                    <a href="/dashboard/users" class="btn btn-primary">Vai</a>
                </div>
            </div>
        </div>

        <section class="container">
        <div class="row">
            <div class="col-md-6">
            <h2>Benvenuto nella tua dashboard admin</h2>
            <p class="lead">Ecco cosa puoi fare nella tua dashboard:</p>
            <ul>
                <li>visualizzare, aggiungere  e cancellare utenti</li>
                <li>visualizzare, cancellare e creare biglietti</li>
            </ul>
        </div>
        <div class="col-md-6">
            <img style="heigth:300px; width:300px;" src="<?php echo IMAGES_PATH.'/admin_dashboard_profile_pic.jfif'?>" class="img-fluid" alt="User Dashboard Image">
        </div>
    </div>
        </section>
    </div>
</body>
</html>