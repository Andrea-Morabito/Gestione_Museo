<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include(__DIR__.'/../includes/navbar.php');?>
    <h1>Lista Utenti</h1>
    <?php include(__DIR__."/../includes/userList.php");?>

    <?php include('addUser.php');?>
</body>
</html>