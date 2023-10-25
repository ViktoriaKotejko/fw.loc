<?php
error_reporting(-1);
use vendor\core\Router;

require_once '../vendor/libs/function.php';

define('WWW', __DIR__);
define('CORE', dirname(__DIR__) . 'vendor/core');
define('ROOT',dirname(__DIR__));
define('APP',dirname(__DIR__) . '/app');
define('CACHE',dirname(__DIR__) . '/tmp/cache');
define('LAYOUT','default');
define('LIBS', dirname(__DIR__) . '/vendor/libs');



spl_autoload_register(function($class){
    $file = ROOT . '/' . str_replace('\\', '/', $class) . '.php';
    if(is_file($file)){
        require_once $file;
    }
});

$query = rtrim($_SERVER['QUERY_STRING'], '/');

new \vendor\core\App;

Router::add('^page/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$',['controller'=>'Page']);
Router::add('^page/(?P<alias>[a-z-]+)$',['controller'=>'Page', 'action'=> 'view']);

//defaults routs
Router::add('^$',['controller'=>'Main', 'action'=>'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');


Router::dispatch($query);
