<?php


namespace vendor\core;


class Registry
{
    public static $objects = [];

    protected static $instance;

    protected function __construct()
    {
        require ROOT . '/config/config.php';
        foreach ($config['components'] as $name =>$component)
        {
            self::$objects[$name] = new $component;
        }
    }

    public static function instance() {
        if(self::$instance === null){
            self::$instance = new self;
        }
        return self::$instance;
    }

    //Вызывается автоматически в том случае если происходит обращение к неизвестному свойству
    public function __get($name)
    {
        if (is_object(self::$objects[$name])) {
            return self::$objects[$name];
        }
    }

    //пытаемся чтото запивать в неопределенное свойство
    public function __set( $name, $object): void
    {
        if (!isset(self::$objects[$name])){
            self::$objects[$name] = new $object;
        }
    }

    public function getList()
    {
        echo '<pre>';
        var_dump(self::$objects);
        echo '</pre>';
    }
}