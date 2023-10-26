<?php

namespace app\controllers;

use app\models\Main;
use vendor\core\App;
use vendor\core\base\Controller;

class MainController extends AppController
{

    public function indexAction(){

       // \R::fancyDebug(true);
//        App::$app->getList();
        $model = new Main();
        $posts = App::$app->cache->get('posts');
        if (!$posts){
            $posts = \R::findAll('posts');
            App::$app->cache->set('posts', $posts);
        }



        $post = \R::findOne('posts', 'id = 1');

        $menu = $this->menu;
        $title = 'PAGE TITLE';

//        $this->setMeta('Главная страница', 'Описание страницы','Ключевые слова');
        $this->setMeta($post->title, $post->description, $post->keywords);
        $meta = $this->meta;
        $this->set(compact('title', 'posts', 'menu', 'meta'));

    }

    public function testAction()
    {
        $this->layout = 'test';
    }

}