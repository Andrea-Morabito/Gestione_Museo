<?php
    include "vendor/autoload.php";
    $router = new App\Public\Router();

    define('VIEW_PATH', __DIR__.'/../Views');
    define('STYLE_PATH', __DIR__.'/../Public/Styles');

    $router
    ->get("/",[App\Controllers\Home::class, 'index'])
    ->get("/invoices", [App\Controllers\Invoice::class, 'index'])
    ->get("/invoices/create", [App\Controllers\Invoice::class, 'create'])
    ->post("/invoices/create", [App\Controllers\Invoice::class, 'store']);

    $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));