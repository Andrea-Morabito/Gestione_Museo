<?php
    use App\Exceptions\RouteNotFoundException;
    use App\View;
    use App\App;
    use App\Shared\Router;
    use App\Controllers as Controllers;

    include "vendor/autoload.php";
    define('VIEW_PATH', __DIR__.'/../Views');
    define('STYLE_PATH', 'src/Shared/Styles');
    define('IMAGES_PATH', 'src/Shared/Images');

        $router = new Router(); // Creates a new object Router
        
        //Set all the routes for the Router
        $router
        ->get("/",[Controllers\Home::class, 'index'])
        ->get("/invoices", [Controllers\Invoice::class, 'index'])
        ->get("/invoices/create", [Controllers\Invoice::class, 'create'])
        ->post("/invoices/create", [Controllers\Invoice::class, 'store']);
      
    (new App(
        $router,
        ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']],
    ))->run();