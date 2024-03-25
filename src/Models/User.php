<?php
    declare(strict_types=1);
    namespace App\Models;
    use App\Model;
    use App\DB;
    class User extends DB{

    public function getAllUsers():array{
        $sql = "SELECT email, nome, cognome, categoria FROM utente";
        $stmt = $this->connect()->query($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function getUser(string $email){
        $sql = "SELECT IdUtente FROM utente WHERE email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);
        return $stmt->fetch()['IdUtente'];
    }

    public function getUserCategory(string $user_id){
        $sql = "SELECT categoria FROM utente WHERE IdUtente = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_id]);
        return $stmt->fetch()['categoria'];
    }

    public function getPassword(string $email): string{
        $sql = "SELECT password FROM utente WHERE email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);
        return $stmt->fetch()['password'];
    }

    public function getUserRole(string $email): string{
        $sql = "SELECT ruolo FROM utente WHERE email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);
        return $stmt->fetch()['ruolo'];
    }

    public function createUser(string $email, 
                               string $password, 
                               string $nome, 
                               string $cognome,
                               string $categoria){

        $sql = "INSERT INTO utente(email, nome, cognome, password, categoria) 
                VALUES(?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email, $nome, $cognome, $password, $categoria]);
    }

    public function deleteUser(string $email){
        $sql ="DELETE FROM utente WHERE email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);
    }
}