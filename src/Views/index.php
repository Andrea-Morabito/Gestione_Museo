<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo '/ProgettoVenereUDA' . '/' . STYLE_PATH . '/style.css';?>">
</head>
<body>
    <p>
        <?php 
        foreach($this->params as $k => $v){
            foreach($v as $key => $value){
                echo $key."->".$value;
                echo "<br>";
            }
            echo "<br>";
        }
    ?></p>
    <h1>Ciao Mondo</h1>
</body>
</html>