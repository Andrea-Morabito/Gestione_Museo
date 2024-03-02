<?php 
namespace App\Public;
use App\Exception\RouteNotFoundException;
class Router{
    public array $routes;
    private function addRoute(string $requestType, string $route, callable|array $action) :self{
        $this->routes[$requestType][$route] = $action;
        return $this;
    }

    public function get(string $route, callable|array $action) :self{
        return $this->addRoute('get', $route, $action);
    }

    public function post(string $route, callable|array $action) :self{
        return $this->addRoute('post', $route, $action);
    }

    public function routes(): array{
        return $this->routes;
    }

    public function resolve(string $_REQUEST_URI, string $requestType){
        $route = explode('?', $_REQUEST_URI)[0];
        $action = $this ->routes[$requestType][$route] ?? null;
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