<?php
declare(strict_types= 1);
namespace App;
ini_set('display_errors', '1');
use App\Exception\ViewNotFoundException;
class View{
    /** Constructor of the View
     * @param $view, name of the view
     * @param $params, array that are passed in the view
     */
    public function __construct(
        protected string $view, 
        protected array $params = []
    ) {
    }

    /** Makes a new static View object
     * @param $view, name of the view
     * @param $params, array that are passed in the view
     * @return View
     */
    public static function make(string $view, array $params=[]): View{
        return new static($view, $params);
    }

    /** Handler responsible for rendering the View obj
     * @return string
     */
    public function render(): string{
        $viewPath = VIEW_PATH."/".$this->view.'.php'; // Absolute path to the View that needs to be rendered
        if(!file_exists($viewPath)){ // Checks if the file exist
            throw new ViewNotFoundException();
        }

        foreach($this->params as $key => $value){
            $$key = $value; // The var $$key will be passed by reference
        }

        ob_start(); // Starts the output buffering
        include $viewPath; // include the file in the view path
        ob_flush(); // Flushes the budder
        return (string)ob_get_clean(); // Returns the output of the buffer
    }

    /** toString method of the View class, magic method
     * @return string
     */
    public function __toString():string{
        return $this->render();
    }
}