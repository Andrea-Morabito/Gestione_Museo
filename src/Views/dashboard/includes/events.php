<table>
    <th>Titolo</th>
    <th>Costo</th>
    <th>Data Inizio</th>
    <th>Data Fine</th>
    <?php 
        foreach($this->params as $key=>$v){
            ?>
                <tr>
                <td><?php echo $v['titolo']?></td>
                <td><?php echo $v['tariffa']?></td>
                <td><?php echo $v['data_inizio']?></td>
                <td><?php echo $v['data_fine']?></td>
                <?php if($_SESSION['user_role'] == 'user'){ ?>
                    <td>
                    <form action="/dashboard/book" method="post">
                        <input type="hidden" name="ticket_name" value="<?php echo $v['titolo'];?>">
                        <input type="submit" name="ticket_book" value="Aggiungi" />
                    </form>
                    </td>
                <?php } ?>
                <?php if($_SESSION['user_role'] == 'admin'){ ?>
                        <td>
                        <form action="/dashboard/tickets/delete" method="post">
                            <input type="hidden" name="ticket_name" value="<?php echo $v['titolo'];?>">
                            <input type="submit" name="ticket_delete" value="Elimina" />
                        </form>
                        </td>
                <?php } ?>
                </tr>
            <?php } ?>
</table>