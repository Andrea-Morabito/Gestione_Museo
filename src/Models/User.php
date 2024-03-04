<?php
    declare(strict_types=1);
    namespace App\Models;
    use App\Model;
    use App\DB;
    class User extends DB{
    
    public function getUser(string $nome){
        $sql = "SELECT * FROM utenti WHERE nome = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$nome]);
        return $stmt->fetch();
    }
}