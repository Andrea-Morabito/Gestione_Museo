<?php
    use App\Exceptions\RouteNotFoundException;
    use App\View;
    use App\App;
    use App\Shared\Router;
    use App\Controllers as Controllers;

    include "vendor/autoload.php";
    define('VIEW_PATH', __DIR__.'/../Views');
    define('STYLE_PATH', 'src/Shared/Styles');
    define('IMAGES_PATH', '/ProgettoVenereUDA/src/Shared/Images');

        $router = new Router(); // Creates a new object Router
        
        //Set all the routes for the Router
        $router
        ->get("/",[Controllers\Home::class, 'index'])
        //Login routes
        ->get("/login",[Controllers\Login::class, 'index'])
        ->post("/login",[Controllers\Login::class, 'authenticate'])
        //Signup routes
        ->get("/signup",[Controllers\Signup::class, 'index'])
        ->post("/signup",[Controllers\Signup::class, 'create'])
        //Logout routes
        ->get("/logout",[Controllers\Dashboard::class, 'logout'])
        //route for managin tickets
        ->get("/dashboard",[Controllers\Dashboard::class, 'index'])
        ->get("/dashboard/cart",[Controllers\Dashboard::class, 'showCart'])
        ->get("/dashboard/tickets",[Controllers\Dashboard::class, 'eventList'])
        ->get("/dashboard/tickets/add",[Controllers\Dashboard::class, 'addEventForm'])
        ->post("/dashboard/tickets/add",[Controllers\Dashboard::class, 'addEvent'])
        ->post("/ticket/add/summary",[Controllers\Dashboard::class, 'getTicketPrice'])
        ->post("/dashboard/tickets/delete",[Controllers\Dashboard::class, 'deleteEvent'])
        //routes for managing users
        ->get("/dashboard/users",[Controllers\Dashboard::class, 'userList'])
        ->get("/dashboard/users/add",[Controllers\Dashboard::class, 'addUserForm'])
        ->post("/dashboard/users/add",[Controllers\Dashboard::class, 'addUser'])
        ->post("/dashboard/users/delete",[Controllers\Dashboard::class, 'deleteUser'])
        //other dashboard routes
        ->post("/dashboard/book",[Controllers\Dashboard::class, 'bookEvent'])
        ->get("/dashboard/delete_account",[Controllers\Dashboard::class, 'deleteUserAccount'])
        ->post("/dashboard/add_accessories",[Controllers\Dashboard::class, 'addAccessories'])
        ->post("/dashboard/event/delete",[Controllers\Dashboard::class, 'deleteUserEvent']);
        
        
    (new App(
        $router,
        ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']],
    ))->run();