<?php
declare(strict_types= 1);
namespace App;
ini_set('display_errors', '1');
use App\Exception\ViewNotFoundException;
class View{
    public function __construct(
        protected string $view, 
        protected array $params = []
    ) {
    }

    public static function make(string $view, array $params=[]): View{
        return new static($view, $params);
    }

    public function render(): string{
        $viewPath = VIEW_PATH."/".$this->view.'.php';
        if(!file_exists($viewPath)){
            throw new ViewNotFoundException();
        }
        
        foreach($this->params as $key => $value){
            $$key = $value;
        }

        ob_start();
        include $viewPath;
        ob_flush();
        return (string)ob_get_clean();
    }

    public function __toString():string{
        return $this->render();
    }
}