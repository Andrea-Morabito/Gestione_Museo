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
    <form style="display:flex;flex-direction:column" action="/dashboard/add_accessories" method='post'>
    <?php foreach($accessories as $k => $v){ ?>
            <div>
                <tr>
                    <td><input type="checkbox" value="<?php echo $v['IdAccessorio']?>" name="<?php echo $v['descrizione']?>"><?php echo $v['descrizione']?></td>
                    <td><?php echo $v['prezzo']?></td>
                </tr>
            </div>
    <?php }?>
        <input type="hidden" value="<?php echo $ticket_name?>" name="ticket_name">
        <input type="submit" value="Aggiungi" \>
    </form>
</body>
</html>