<?php
    namespace App\Controllers;
    use App\View;
    use App\App;
    use App\Models\User;
    class Home{
        public function index():string{
            $name = "Andrea";

            $userModel = new User();
            $userInfo = $userModel->getUser($name);
            var_dump($userInfo);
            
            return View::make('index', $userInfo);
        }
    }