<?php
 declare(strict_types=1);
 namespace App;
 use PDO;
 class DB{
    private $host = "localhost";
    private $user = "morabito5400";
    private $pass = "";
    private $dbName = "my_morabito5400";

    public function connect(){
        $dns = 'mysql:host='. $this->host .';dbname='. $this->dbName;
        $pdo = new PDO($dns, $this->user, $this->pass);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}