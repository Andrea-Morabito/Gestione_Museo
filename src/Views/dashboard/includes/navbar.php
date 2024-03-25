<nav>
    <header>
        <ul>
            <li><a href="/">Home</a></li>
           
           <li><a href="/dashboard/tickets">Biglietti</a></li>

            <li><a href="/logout">Logout</a></li>
            
            <?php if(isset($_SESSION['user_role']) && $_SESSION['user_role'] != 'admin'){ ?>
                <form action="/dashboard/delete_account" method="get">
                    <input type="hidden" name="user_mail" value="<?php echo $_SESSION['user_mail'] ?>">
                    <input type="submit" value="Cancella">
                </form>
            <?php } ?>
        </ul>
    </header>
</nav>