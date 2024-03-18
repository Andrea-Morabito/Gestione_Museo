<?php
    declare(strict_types=1);
    namespace App\Models;
    use App\Model;
    use App\DB;
    class Ticket extends DB{

        public function getAvailableTickets(): array{
            $sql = "SELECT titolo, tariffa, data_inizio, data_fine FROM biglietto";
            $stmt = $this->connect()->query($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }