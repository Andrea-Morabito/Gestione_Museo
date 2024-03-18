<?php
    namespace App\Controllers;
    use App\View;
    use App\App;
    use App\Models\User;
    use App\Models\Ticket;
    session_start();

    class Dashboard{
        public function index():string{
            $user = new User();
            $ticket = new Ticket();

            $user_mail = $_SESSION['user_mail'];
            $user_role = $user->getUserRole($user_mail);
            $available_tickets = $ticket->getAvailableTickets();

            if($user_role == "admin"){
                return View::make('dashboard/amministratore', $available_tickets);
            } else if($user_role == "user"){
                return View::make('dashboard/utente', $available_tickets);
            } else{
                return View::make('dashboard/error');
            }
        }
    }