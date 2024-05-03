<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo '/ProgettoVenereUDA' . '/' . STYLE_PATH . '/style.css'?>">
<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Email</th>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Categoria</th>
                <?php if($_SESSION['user_role'] == 'admin'){ ?>
                    <th>Azioni</th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach($this->params as $key=>$v){ ?>
                <tr>
                    <td><?php echo $v['email']?></td>
                    <td><?php echo $v['nome']?></td>
                    <td><?php echo $v['cognome']?></td>
                    <td><?php echo $v['categoria']?></td>
                    <?php if($_SESSION['user_role'] == 'admin'){ ?>
                        <td>
                            <form action="/dashboard/users/delete" method="post">
                                <input type="hidden" name="user_mail" value="<?php echo $v['email'];?>">
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>