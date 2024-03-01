<?php
namespace App;
use App\Exception\ViewNotFoundException;
class View{
    public function __construct(
        protected string $view, 
        protected array $params = []
    ) {
    }

    public static function make(string $view, array $params = []): static{
        return new static($view, $params);
    }

    public function render() : string{
        $viewPath = VIEW_PATH."/".$this->view.'.php';
        if(!file_exists($viewPath)){
            throw new ViewNotFoundException();
        }
        ob_start();
        include $viewPath;

        return ob_start();
    }
}