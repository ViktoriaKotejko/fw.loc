<?php

namespace app\controllers;

use vendor\core\base\Controller;

class Main extends App
{
//   public $layout = 'main';

    public function indexAction(){
//        $this->layout = 'default';
        $name = 'Vika';
        $hi = 'Hello';
        $colors = [
            'white' => 'Белый',
            'black' => 'чурный'
        ];
        $this->set(compact('name','hi', 'colors' ));

    }

}