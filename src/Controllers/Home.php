<?php
    declare(strict_types= 1);
    namespace App\Controllers;
    use App\View;
    class Home{
        public function index(): string{
            return (string)View::make('index');
        }
    }