<?php
    namespace App\Controllers;
    use App\Models\Booking;
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

        public function ticket(){
            $user = new User();
            $ticket = new Ticket();
            $booking_manager = new Booking();
            $user_id = $user->getUser($_SESSION['user_mail']);
            $ticket_name = htmlentities($_POST['ticket_name']);
            $ticket_id = $ticket->getTicket($ticket_name);

            $booking_manager->new($ticket_id, $user_id);
            return View::make('success', ['response_code' => 'Prenotazione avvenuta con successo']);
        }

        public function logout(){
            session_unset();
            session_destroy();
        }
    }