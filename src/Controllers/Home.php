<?php
    namespace App\Controllers;
    use App\View;
    class Home{
        public function index():string{
            return View::make('index');
        }
    }