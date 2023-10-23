<?php


namespace app\controllers;

use vendor\core\base\Controller;

class PageController extends AppController
{
    public function viewAction(){
        $menu = $this->menu;

        $title = 'Страница';
        $this->set(compact('title' , 'menu'));

    }

}