<?php
    namespace App\Exception;
    class RouteNotFoundException extends \Exception{
        protected $msg = '404 Not Found';
        
    }