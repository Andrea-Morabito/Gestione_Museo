<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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