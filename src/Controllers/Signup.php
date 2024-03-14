<?php
    namespace App\Controllers;
    use App\View;
    use App\App;
    use App\Models\User;
    class Signup{
        public function index():string{
            return View::make('signup/index');
        }
        public function create():string{
            return View::make('signup/create');
        }
    }