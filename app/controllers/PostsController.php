<?php

namespace app\controllers;

use vendor\core\base\Controller;

class PostsController extends AppController
{

    public function indexAction(){
        echo ' Post::index';
    }

    public function testAction(){
        debug($this->route);
    }
}