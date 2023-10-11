<?php
error_reporting(-1);
use vendor\core\Router;

require_once '../vendor/libs/function.php';

define('WWW', __DIR__);
define('CORE', dirname(__DIR__) . 'vendor/core');
define('ROOT',dirname(__DIR__));
define('APP',dirname(__DIR__) . '/app');


spl_autoload_register(function($class){
    $file = ROOT . '/' . str_replace('\\', '/', $class) . '.php';
    if(is_file($file)){
        require_once $file;
    }
});

$query = rtrim($_SERVER['QUERY_STRING'], '/');

Router::add('^pages/?(?P<action>[a-z-]+)?$',['controller'=>'Posts']);

//defaults routs
Router::add('^$',['controller'=>'Main', 'action'=>'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');


Router::dispatch($query);
