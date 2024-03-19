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
        public function getAvailableTickets(): array{
            $sql = "SELECT titolo, tariffa, data_inizio, data_fine FROM biglietto";
            $stmt = $this->connect()->query($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }