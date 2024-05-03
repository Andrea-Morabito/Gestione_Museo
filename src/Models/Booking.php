<?php
    declare(strict_types=1);
    namespace App\Models;
    use App\Model;
    use App\DB;
    class Booking extends DB{

        public function getBookings($user_id): array{
            $sql = "SELECT Codice_Biglietto, Codice_Utente FROM prenotazione WHERE Codice_Utente = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$user_id]);
            return $stmt->fetchAll();
        }
        public function new(int $id_ticket, int $id_user){
            $sql = "INSERT INTO prenotazione(Codice_Biglietto, Codice_Utente, data_prenotazione) VALUES (?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id_ticket, $id_user, date("Y-m-d")]);
        }

        public function getUserDiscount(int $category_id){
            $sql = "SELECT sconto FROM categoria WHERE IdCategoria = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$category_id]);
            return $stmt->fetch()['sconto'];
        }

        public function deleteBookings(int $ticket_id){
            $sql = "DELETE FROM prenotazione WHERE Codice_Biglietto = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$ticket_id]);
        }

        public function deleteUserBookings(int $ticket_id, int $user_id){
            $sql = "DELETE FROM prenotazione WHERE Codice_Biglietto = ? AND Codice_Utente = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$ticket_id, $user_id]);
        }
    }