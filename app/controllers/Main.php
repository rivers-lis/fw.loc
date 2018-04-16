<?php

namespace app\controllers;


class Main extends App {

//    public $layout = 'main';

    public function indexAction() {
//        $this->layout = false;
//        echo 'Main::index';
//        $this->layout = 'main';
//        $this->view = 'test';
        $name = 'Андрей';
        $hi = 'Hello';
        $colors = [
            'white' => 'белый',
            'black' => 'черный',
        ];
        $title = 'PAGE TITLE';
        $this->set(compact('name', 'hi', 'colors', 'title'));
    }

}