<?php
    namespace App\Controllers;
    use App\View;
    class Invoice{

        public function index(){
            return View::make('invoices/index')->render();
        }

        public function create(){
            return View::make('invoices/create')->render();
        }

        public function store(){
            $amount = $_POST['number'];
            echo $amount;
        }
    }