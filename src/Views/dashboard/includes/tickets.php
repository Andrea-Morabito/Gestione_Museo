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
                <td>
                    <form action="dashboard/book" method="post">
                        <input type="hidden" name="ticket_name" value="<?php echo $v['titolo'];?>">
                        <input type="submit" name="ticket_book">
                    </form>
                </td>
                </tr>
            <?php
        }
    ?>
</table>