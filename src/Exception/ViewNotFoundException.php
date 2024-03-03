<?php
    namespace App\Exception;
    class ViewNotFoundException extends \Exception{
        protected $msg = 'View Not Found';
        
    }