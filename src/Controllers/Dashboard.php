<?php
    namespace App\Controllers;
    use App\View;
    use App\App;
    use App\Models\User;
    session_start();

    class Dashboard{
        public function index():string{
            $user = new User();
            $user_mail = "admin@gmail.com";
            $user_role = $user->getUserRole($user_mail);
            if($user_role == "admin"){
                return View::make('dashboard/amministratore');
            } else if($user_role == "user"){
                return View::make('dashboard/utente');
            } else{
                return View::make('dashboard/error');
            }
        }
    }