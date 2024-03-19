<nav>
    <header>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/dashboard/events">Biglietti</a></li>
            <li><a href="/logout">Logout</a></li>
            <?php
            if(isset($_SESSION['user_role']) && $_SESSION['user_role'] != 'admin'){
            ?>
            <li><a href="/dashboard/delete_account">Cancella Account</a></li>
            <?php
            }
            ?>
        </ul>
    </header>
</nav>