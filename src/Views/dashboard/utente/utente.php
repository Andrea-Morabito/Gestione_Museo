<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include(__DIR__."/../includes/navbar.php")?>
    <h1>Utente</h1>
    <section class="container my-5">
        <div class="row">
            <div class="col-md-6">
            <h2>Benvenuto nella tua dashboard</h2>
            <p class="lead">Ecco cosa puoi fare nella tua dashboard:</p>
            <ul>
                <li>Visualizzare le tue prenotazioni nella sezione "Carrello"</li>
                <li>Esplorare le mostre in corso</li>
                <li>Acquistare biglietti per eventi speciali</li>
            </ul>
            </div>
            <div class="col-md-6">
            <img style="heigth:300px; width:300px;" src="<?php echo IMAGES_PATH.'/user_dashboard_profile_pic.jfif'?>" class="img-fluid" alt="User Dashboard Image">
            </div>
        </div>
    </section>
</body>
</html>