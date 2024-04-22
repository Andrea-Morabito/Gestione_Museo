<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo '/ProgettoVenereUDA' . '/' . STYLE_PATH . '/style.css'?>">
<div>
<?php include(__DIR__.'/../includes/navbar.php')?>
</div>
<div>
    <form action="/dashboard/tickets/add" method="post" class="row g-3">
        <div class="col-md-3">
            <input type="text" class="form-control" name="ticket_name" placeholder="Nome del biglietto">
        </div>
        <div class="col-md-2">
            <input type="number" class="form-control" name="ticket_price" placeholder="Prezzo">
        </div>
        <div class="col-md-2">
            <input type="date" class="form-control" name="ticket_start">
        </div>
        <div class="col-md-2">
            <input type="date" class="form-control" name="ticket_end">
        </div>
        <div class="col-md-3">
            <button type="submit" class="btn btn-primary" name="addTicket">Inserisci</button>
        </div>
    </form>
</div>
<div style="margin-top: 3em">
<?php include(__DIR__.'/../includes/events.php'); ?>
</div>