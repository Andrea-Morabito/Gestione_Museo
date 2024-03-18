<?php
    namespace App\Controllers;
    use App\View;
    use App\App;
    use App\Models\User;
    use App\Models\Category;

    session_start();
    class Signup{
        public function index():string{
            return View::make('signup/index');
        }
        
        public function create():string{
            $user = new User();

            $category = new Category();
            $email = htmlentities($_POST['userEmail']);
            $password = htmlentities($_POST['userPassword']);
            $username = htmlentities($_POST['userName']);
            $user_surname = htmlentities($_POST['userSurname']);
            $selected_category = $category->getCategory(htmlentities($_POST['category']));
            
            $user->createUser($email, password_hash($password, PASSWORD_DEFAULT), $username, $user_surname, $selected_category);
            $_SESSION['user_mail'] = $email;
            
            return View::make('dashboard/index');
        }
    }