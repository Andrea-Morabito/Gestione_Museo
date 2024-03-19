<?php
    declare(strict_types=1);
    namespace App\Models;
    use App\Model;
    use App\DB;
    class Booking extends DB{

        public function new(int $id_ticket, int $id_user){
            $sql = "INSERT INTO prenotazione(Codice_Biglietto, Codice_Utente, data_prenotazione) VALUES (?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id_ticket, $id_user, date("Y-m-d")]);
        }
    }