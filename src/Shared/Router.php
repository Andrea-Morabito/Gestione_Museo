<?php 

namespace App\Shared;
use App\Exception\RouteNotFoundException;
class Router{
    //Create an array containing all of our routes
    public array $routes;

    /** Add route function to make a new route, private function
     * @param $requestType, what type the request will be (get, post)
     * @param $route, what will be the route of the action
     * @param $action, action of the route, the action is a method in the Controller classes
     * @return self
    */
    private function addRoute(string $requestType, string $route, callable|array $action) :self{
        $this->routes[$requestType][$route] = $action;
        return $this;
    }

    /** Add a get route
     * @param $route, route of the action 
     * @param $action, can be an array, in our case the array will have the Controller name and the method inside of it
     * @return self
     */
    public function get(string $route, callable|array $action) :self{
        return $this->addRoute('get', $route, $action);
    }

    /** Add a get route
     * @param $route, route of the action 
     * @param $action, can be an array, in our case the array will have the Controller name and the method inside of it
     * @return self
     */
    public function post(string $route, callable|array $action) :self{
        return $this->addRoute('post', $route, $action);
    }

    /** routes method returns all the routes
     * @return array, return an array containing all the routes
     */
    public function routes(): array{
        return $this->routes;
    }

    /** The resolve method is responsible of calling the functions of a Controller
     * @param $REQUEST_URI, URI of the request
     * @param $requestType, takes the type request, can be get or post
     */
    public function resolve(string $_REQUEST_URI, string $requestType){
        $route = explode('?', $_REQUEST_URI)[0];
        $action = $this ->routes[$requestType][$route] ?? null; // Checks if the route of that matches the $requestType exist
        if(! $action){
            throw new RouteNotFoundException();
        }

        if(is_callable($action)){ //Checks if the action is callable, doesn't work if you have an array
            return call_user_func($action);
        }

        if(is_array($action)){//Check id the $action variable is an array
           [$class, $method] = $action; //Creates 2 variable $class ad $method

           if(class_exists($class)){ //Check if the class of $class variable exists
             $class = new $class();

             if(method_exists($class, $method)){//Checks if $method in the class $class exist
                return call_user_func_array([$class, $method], []); // if it does, call the method in the class $class
             }
           }
        }
    }
}