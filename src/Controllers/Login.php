<?php
    namespace App\Controllers;
    use App\View;
    use App\App;
    use App\Models\User;

    session_start();
    class Login{
        public function index():string{
            if(isset($_SESSION['user_mail'])){
                return View::make('success', ['response_code' => 'Utente già registrato', 'url' => '/dashboard']);
            }else{
                return View::make('login/index');
            }
        }
        public function authenticate():string{
                $user = new User();
                $user_mail = htmlentities($_POST['userEmail']);
                $login_password = htmlentities($_POST['userPassword']);
                $user_password = $user->getPassword($user_mail);
                $user_role = $user->getUserRole($user_mail);
                if(password_verify($login_password, $user_password)){
                    $_SESSION['user_mail'] = $user_mail;
                    $_SESSION['user_role'] = $user_role;
                    return View::make('success', ['response_code' => 'Accesso avvenuto con successo', 'url' => '/dashboard']);
                } else{
                    return View::make('login/index');
                }
        }
    }