<?php
    include "vendor/autoload.php";
    $router = new App\Public\Router();

    $router->addRoute(
        "/",
        [App\Controllers\Welcome::class, 'index']
    );

    $router->addRoute(
        "/invoices",
        [App\Controllers\Invoice::class, 'index']
    );

    $router->addRoute(
        "/invoices/create",
        [App\Controllers\Invoice::class, 'create']
    );

    $router->resolve($_SERVER['REQUEST_URI']);