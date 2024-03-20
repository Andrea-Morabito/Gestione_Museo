<table>
    <th>email</th>
    <th>nome</th>
    <th>Cognome</th>
    <th>Categoria</th>
    <?php 
        foreach($this->params as $key=>$v){
            ?>
                <tr>
                <td><?php echo $v['email']?></td>
                <td><?php echo $v['nome']?></td>
                <td><?php echo $v['cognome']?></td>
                <td><?php echo $v['categoria']?></td>
                <?php if($_SESSION['user_role'] == 'admin'){ ?>
                    <td>
                    <form action="/dashboard/users/delete" method="post">
                        <input type="hidden" name="user_mail" value="<?php echo $v['email'];?>">
                        <input type="submit" name="delete_user" value="Elimina" />
                    </form>
                    </td>
                <?php } ?>
                </tr>
            <?php } ?>
</table>