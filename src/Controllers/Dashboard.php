<?php
    namespace App\Controllers;
    use App\Models\Booking;
    use App\View;
    use App\App;
    use App\Models\User;
    use App\Models\Ticket;
    use App\Models\Accessory;
    session_start();

    class Dashboard{
        public function index():string{
            $user = new User();

            $user_mail = $_SESSION['user_mail'];
            $user_role = $user->getUserRole($user_mail);

            if($user_role == "admin"){
                return View::make('dashboard/amministratore');
            } else if($user_role == "user"){
                return View::make('dashboard/utente');
            } else{
                return View::make('error/404');
            }
        }

        public function eventList():string{
            $ticket = new Ticket();
            $available_tickets = $ticket->getAvailableTickets();
            return View::make('dashboard/tickets', $available_tickets);
        }

        public function bookEvent():string{
            $user = new User();
            $ticket = new Ticket();
            $accessory = new Accessory();
            $booking_manager = new Booking();
            $user_id = $user->getUser($_SESSION['user_mail']);
            $ticket_name = htmlentities($_POST['ticket_name']);
            $ticket_id = $ticket->getTicket($ticket_name);

            $available_accessories = $accessory->getAvailableAccessories();
            $booking_manager->new($ticket_id, $user_id);
            return View::make('/dashboard/accessories', ['ticket_name' => $ticket_name, 'accessories' => $available_accessories]);
        }

        public function add_accessories(){
            $user = new User();
            $ticket = new Ticket();
            $accessory = new Accessory();

            $user_id = $user->getUser($_SESSION['user_mail']);
            $ticket_id = $ticket->getTicket($_POST['ticket_name']);
            
            $post_count = count($_POST);
            $counter = 0;
            
            foreach($_POST as $k => $v) {
                $counter++;
                if ($counter < $post_count) {
                    $accessory->addTicketAccessory($ticket_id, (int)$v, $user_id);
                }
            }
            return View::make('success', ['response_code' => 'Accessori aggiunti correttamente', 'url' => '/dashboard']);
        }

        public function logout():string{
            session_unset();
            session_destroy();
            return View::make('success', ['response_code' => 'Logout avvenuto con successo', 'url' => '/login']);
        }

        public function deleteUserAccount():string {
            $user = new User();
            $user->deleteUser($_SESSION['user_mail']);
            session_unset();
            session_destroy();
            return View::make('success', ['response_code' => 'Account eliminato con successo', 'url' => '/']);
        }
    }