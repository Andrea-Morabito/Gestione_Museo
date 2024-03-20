<?php
    namespace App\Controllers;
    use App\Models\Booking;
    use App\View;
    use App\App;
    use App\Models\User;
    use App\Models\Ticket;
    use App\Models\Accessory;
    use App\Models\Category;
    session_start();

    class Dashboard{
        public function index():string{
            $user = new User();

            $user_mail = $_SESSION['user_mail'];
            $user_role = $user->getUserRole($user_mail);

            if($user_role == "admin"){
                return View::make('dashboard/amministratore/amministratore');
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

        public function userList():string{
            $users = new User();
            $users_list = $users->getAllUsers();
            return View::make('/dashboard/amministratore/users', $users_list);
        }

        public function addEventForm(){
            if($_SESSION['user_role'] == 'admin'){
                return View::make('/dashboard/amministratore/addTicket');
            } else{
                return View::make('/error/404');
            }
        }

        public function addUserForm(){
            if($_SESSION['user_role'] == 'admin'){
                return View::make('/dashboard/amministratore/addUser');
            } else{
                return View::make('/error/404');
            }
        }

        public function addEvent():string{
            $ticket = new Ticket();

            $ticket_name = htmlentities($_POST['ticket_name']);
            $ticket_price = htmlentities($_POST['ticket_price']);
            $ticket_startDate = htmlentities($_POST['ticket_start']);
            $ticket_endDate = htmlentities($_POST['ticket_end']);

            $ticket->add($ticket_name, $ticket_price, $ticket_startDate, $ticket_endDate);
            return View::make('success', ['response_code' => 'Biglietto creato con successo', 'url' => '/dashboard']);
        }

        public function addUser():string{
            $user = new User();
            $category = new Category();
            $email = htmlentities($_POST['userEmail']);
            $password = htmlentities($_POST['userPassword']);
            $username = htmlentities($_POST['userName']);
            $user_surname = htmlentities($_POST['userSurname']);
            $selected_category = $category->getCategory(htmlentities($_POST['category']));
            
            $user->createUser($email, password_hash($password, PASSWORD_DEFAULT), $username, $user_surname, $selected_category);
            $_SESSION['user_mail'] = $email;            
            return View::make('success', ['response_code' => 'Utente creato con successo', 'url' => '/dashboard']);
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

        public function deleteEvent(){
            $ticket = new Ticket();
            $accessory = new Accessory();
            $booking_manager = new Booking();

            $ticket_name = htmlentities($_POST['ticket_name']);
            $ticket_id = $ticket->getTicket($ticket_name);

            $accessory->deleteAccessories($ticket_id);
            $booking_manager->deleteBookings($ticket_id);
            $ticket->delete($ticket_id);

            return View::make('success', ['response_code' => 'Biglietto Cencellato', 'url' => '/dashboard']);
        }

        public function deleteUser(){
            $user = new User();
            $user_id = $user->getUser(htmlentities($_POST['user_mail']));
            
            $booking_manager = new Booking();
            $prenotations = $booking_manager->getBookings($user_id);

            $accessory = new Accessory();
            foreach($prenotations as $k => $v){
                $ticket_id = $v['Codice_Biglietto'];
                $accessory->deleteUserAccessories($ticket_id, $user_id);
                $booking_manager->deleteUserBookings($ticket_id, $user_id);
            }
            return View::make('success', ['response_code' => 'Utente Cencellato', 'url' => '/dashboard']);
        }

        public function addAccessories(){
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