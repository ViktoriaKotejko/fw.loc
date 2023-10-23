<?php

namespace app\controllers;

use app\models\Main;
use vendor\core\base\Controller;

class MainController extends AppController
{

    public function indexAction(){

        $model = new Main();

        $posts = $model->findAll();

//        $date = $model->findBySql("SELECT * FROM {$model->table} ORDER BY id DESC LIMIT 2");
//        debug($date);
//        $data = $model->findLike('та','title');
//        debug($data);
        $title = 'PAGE TITLE';
        $this->set(compact('title', 'posts'));

    }

}