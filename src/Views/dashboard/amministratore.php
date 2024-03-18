<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Amministratore</h1>
    <?php 
    foreach($this->params as $k=>$v){
        var_dump($v);
        echo "<br>";
    }
    ?>
</body>
</html>