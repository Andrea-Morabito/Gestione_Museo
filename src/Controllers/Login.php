<?php
    namespace App\Controllers;
    use App\View;
    use App\App;
    use App\Models\User;

    session_start();
    class Login{
        public function index():string{
            return View::make('login/index');
        }
        public function authenticate():string{
            $user = new User();
            $user_mail = htmlentities($_POST['userEmail']);
            $login_password = htmlentities($_POST['userPassword']);
            $user_password = $user->getPassword($user_mail);
            $user_role = $user->getUserRole($user_mail);
            if(password_verify($login_password, $user_password)){
                return View::make('dashboard/index');
            } else{
                return View::make('login/index');
            }
        }
    }