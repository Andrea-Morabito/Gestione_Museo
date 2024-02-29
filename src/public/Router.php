<?php 
namespace App\Public;
use App\Exception\RouteNotFoundException;
class Router{
    private array $routes;
    public function addRoute(string $route, callable|array $action) :self{
        $this->routes[$route] = $action;
        return $this;
    }

    public function resolve(string $_REQUEST_URI){
        $route = explode('?', $_REQUEST_URI)[0];
        $action = $this ->routes[$route] ?? null;
        if(! $action){
            throw new RouteNotFoundException();
        }

        if(is_callable($action)){
            return call_user_func($action);
        }

        if(is_array($action)){
           [$class, $method] = $action;

           if(class_exists($class)){
             $class = new $class();

             if(method_exists($class, $method)){
                return call_user_func_array([$class, $method], []);
             }
           }
        }
    }
}