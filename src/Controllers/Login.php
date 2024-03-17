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
            $login_password = htmlentities($_POST['userPassword']);
            $user_password = $user->getPassword(htmlentities($_POST['userEmail']));
            if(password_verify($login_password, $user_password)){
                return View::make('login/success');
            } else{
                return View::make('index');
            }
        }
    }