<?php
    namespace App\Controllers;
    use App\View;
    use App\App;
    use App\Models\User;
    class Login{
        public function index():string{
            return View::make('login/index');
        }
        public function authenticate():string{
            return View::make('login/authenticate', $_POST);
        }
    }