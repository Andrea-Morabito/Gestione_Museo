<?php
    declare(strict_types=1);
    namespace App\Models;
    use App\Model;
    use App\DB;
    class Ticket extends DB{

        public function getTicket(string $nome_biglietto){
            $sql = "SELECT IdBiglietto FROM biglietto WHERE titolo = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$nome_biglietto]);
            return $stmt->fetch()['IdBiglietto'];
        }

        public function getPrice(string $ticket_id): string{
            $sql = "SELECT tariffa FROM biglietto WHERE IdBiglietto = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$ticket_id]);
            return $stmt->fetch()["tariffa"];
        }

        public function getAvailableTickets(): array{
            $sql = "SELECT titolo, tariffa, data_inizio, data_fine FROM biglietto";
            $stmt = $this->connect()->query($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function add(string $name, 
                            string $price, 
                            string $start_date, 
                            string $end_date){
            $sql = "INSERT INTO biglietto(titolo, tariffa, data_inizio, data_fine) VALUES (?, ?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);

            if(empty($end_date)){
                $stmt->execute([$name, $price, $start_date, NULL]);
            } else{
                $stmt->execute([$name, $price, $start_date, $end_date]);
            }

        }

        public function delete($ticket_id){
            $sql = "DELETE FROM biglietto WHERE IdBiglietto = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$ticket_id]);
        }

        public function getName($ticket_id){
            $sql = "SELECT titolo, data_inizio, data_fine FROM biglietto WHERE IdBiglietto = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$ticket_id]);
            return $stmt->fetchAll();
        }
    }