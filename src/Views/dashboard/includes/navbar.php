<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo '/ProgettoVenereUDA' . '/' . STYLE_PATH . '/style.css'?>">
<nav>
    <div style="margin-bottom: 2em; background-color: #fafaf9; padding-bottom:1em;">
        <div class="row">
            <div class="col center">
                <a class="navbar-brand" href="/dashboard">Home</a>
            </div>
            <div class="col center">
                <a class="navbar-brand" href="/dashboard/tickets">Biglietti</a>
            </div>
            <div class="col center">
                <a class="navbar-brand" href="/logout">Logout</a>
            </div>
            <?php if(isset($_SESSION['user_role']) && $_SESSION['user_role'] != 'admin'){ ?>
                <div class="col center">
                    <form action="/dashboard/users/delete" method="post">
                        <input type="hidden" name="user_mail" value="<?php echo $_SESSION['user_mail'] ?>">
                        <button type="submit" class="btn btn-danger">Cancella</button>
                    </form>
                </div>
                <div class="col center">
                    <a href="/dashboard/cart">
                        <span>
                            <img src="<?php echo IMAGES_PATH."/bag.svg";?>" alt="IMMAGINE_CARRELLO">
                        </span>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</nav>
