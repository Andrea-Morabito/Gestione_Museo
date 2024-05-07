<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo '/ProgettoVenereUDA' . '/' . STYLE_PATH . '/style.css'?>">
  </head>

  
<body>

<nav class="navbar navbar-expand-lg" style="background-color: #171717 !important">
  <div class="container-fluid">
    <img class="navbar-brand" src="<?php echo IMAGES_PATH.'/palette-fill.svg'?>" alt="NAVBAR_LOGO">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a style="color:whitesmoke;" class="nav-link active" aria-current="page" href="/">Home</a>
        </li>  
      </ul>
    </div>
    <div style="display:flex; gap:1em">
      <a class="nav-link" href="/login">Login</a>
      <a class="nav-link" href="/signup">Registrati</a>
    </div>
  </div>
</nav>
<div class="center" style="width:100%; heigth:60%; margin-top:2em; justify-content: space-between">
  <img style="width:350px; heigth:350px" src="<?php echo IMAGES_PATH.'/paintings/painting1.jfif'?>" class="img-fluid" alt="">
  <img style="width:350px; heigth:350px" src="<?php echo IMAGES_PATH.'/paintings/painting2.jfif' ?>" class="img-fluid" alt="">
  <img style="width:350px; heigth:350px" src="<?php echo IMAGES_PATH.'/paintings/painting4.jfif' ?>" class="img-fluid" alt="">
  <img style="width:350px; heigth:350px" src="<?php echo IMAGES_PATH.'/paintings/painting5.jfif' ?>" class="img-fluid" alt="">
</div>
  

<div class="row my-5">
        <div class="col-md-6">
          <h1>Benvenuti al Museo Venere</h1>
          <p class="lead">Esplora il fascino dell'arte e della cultura nel cuore di Venezia.</p>
          <p>Il Museo Venere offre una vasta collezione di opere d'arte, dall'antichità al contemporaneo. Scopri le meraviglie che hanno ispirato generazioni di artisti e appassionati d'arte.</p>
          <p>Prima di iniziare la tua esperienza, effettua il <a href="/login">login</a> se hai già un account, oppure <a href="/signup">registrati</a> se sei nuovo.</p>
</div>


</body>
</html>