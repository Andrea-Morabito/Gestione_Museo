<?php
    namespace App\Controllers;
    use App\View;
    class Invoice{

        public function index(): string{
            return (string)View::make('invoices/index');
        }

        public function create(): string{
            return (string)View::make('invoices/create');
        }

        public function store(){
            $amount = $_POST['number'];
            echo $amount;
        }
    }