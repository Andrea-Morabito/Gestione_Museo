<?php
    namespace App\Controllers;
    use App\View;
    use App\App;
    use App\Models\User;
    class Dashboard{
        public function index():string{
            return View::make('dashboard/index');
        }
    }