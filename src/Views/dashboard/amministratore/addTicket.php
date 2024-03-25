<form action="/dashboard/tickets/add" method="post">
    <input type="text" name="ticket_name">
    <input type="number" name="ticket_price">
    <input type="date" name="ticket_start">
    <input type="date" name="ticket_end">
    <input type="submit" name="addTicket" value="Inserisci">
</form>
<?php include(__DIR__.'../includes/events.php'); ?>