<?php


namespace vendor\core\base;


abstract class Controller
{
    /**
     * текущий маршрут и параметры (controller, action, params)
     * @var array
     */
    public $route = [];
    /**
     * текущий вид
     * @var string
     */
    public $view;
    /**
     * текущий шаблон
     * @var string
     */
    public $layout;

    /**
     * пользовательские данные
     * @var array
     */
    public $vars = [];

    public function __construct($route){
        $this->route = $route;
        $this->view = $route['action'];
    }

    public function getView(){
      $vObj = new View($this->route, $this->layout, $this->view);
      $vObj->render($this->vars);
    }

    public function set($vars){
       $this->vars = $vars;
    }

}