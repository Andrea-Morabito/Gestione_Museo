<?php
    use App\Exceptions\RouteNotFoundException;
    use App\View;
    use App\Shared\Router;
    include "vendor/autoload.php";
    define('VIEW_PATH', __DIR__.'/../Views');
    define('STYLE_PATH', 'src/Shared/Styles');
    define('IMAGES_PATH', 'src/Shared/Images');
    try{
        $router = new Router(); // Creates a new object Router
        
        //Set all the routes for the Router
        $router
        ->get("/",[App\Controllers\Home::class, 'index'])
        ->get("/invoices", [App\Controllers\Invoice::class, 'index'])
        ->get("/invoices/create", [App\Controllers\Invoice::class, 'create'])
        ->post("/invoices/create", [App\Controllers\Invoice::class, 'store']);
        
    $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));
    }catch(\App\Exception\RouteNotFoundException $e){ // if the route is not found instead of throwing an exception I echo an Error View
        http_response_code(404); //Sends a 404 http response code
        echo View::make('error/404'); //prints the view 404.php in the error folder inside the View folder
    }