<?php
    declare(strict_types=1);
    namespace App\Models;
    use App\Model;
    use App\DB;
    class Accessory extends DB{

        public function getId(string $nome_accessorio){
            $sql = "SELECT IdAccessorio FROM accessorio WHERE descrizione = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$nome_accessorio]);
            return $stmt->fetch()['IdBiglietto'];
        }

        public function getName($id): array{
            $sql = "SELECT descrizione, prezzo FROM accessorio WHERE IdAccessorio = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
            return $stmt->fetch();
        }

        public function getPrice(string $accessory_id): string{
            $sql = "SELECT prezzo FROM accessorio WHERE IdAccessorio = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$accessory_id]);
            return $stmt->fetch()["prezzo"];
        }
        public function getAvailableAccessories(): array{
            $sql = "SELECT * FROM accessorio";
            $stmt = $this->connect()->query($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function addTicketAccessory(int $id_biglietto, int $id_accessorio, int $id_utente){
            $sql = "INSERT INTO accessori_biglietto(Biglietto, Accessorio, Codice_Utente) VALUES (?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id_biglietto, $id_accessorio, $id_utente]);
        }

        public function getUserAccessories(int $user_id, int $ticket_id){
            $sql = "SELECT Accessorio FROM accessori_biglietto WHERE Codice_Utente =  ? AND Biglietto = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$user_id, $ticket_id]);
        }

        public function deleteAccessories(int $ticket_id){
            $sql = "DELETE FROM accessori_biglietto WHERE Biglietto = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$ticket_id]);
        }
        

        public function deleteUserAccessories(int $ticket_id, int $user_id){
            $sql = "DELETE FROM accessori_biglietto WHERE Biglietto = ? AND Codice_Utente = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$ticket_id, $user_id]);
        }
        
    }