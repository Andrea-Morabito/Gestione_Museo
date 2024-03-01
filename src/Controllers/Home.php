<?php
    namespace App\Controllers;
    use App\View;
    class Home{
        public function index(){
            return View::make('index')->render();
        }
    }