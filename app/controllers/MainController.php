<?php

namespace app\controllers;

use app\models\Main;

class MainController extends AppController {

//    public $layout = 'main';

    public function indexAction() {
//        $this->layout = false;
//        echo 'Main::index';
//        $this->layout = 'main';
//        $this->view = 'test';
//        $name = 'Андрей';
//        $hi = 'Hello';
//        $colors = [
//            'white' => 'белый',
//            'black' => 'черный',
//        ];
        $model = new Main;
//        $res = $model->query("CREATE TABLE product SELECT * FROM yii2_loc.product");
        $product = $model->findAll();
        $product2 = $model->findAll();
//        $product = $model->findOne('Испанский бренд', 'content');
//        $product = $model->findOne(2);
//        $data = $model->findBySql("SELECT * FROM product ORDER BY id DESC LIMIT 2");
//        $data = $model->findBySql("SELECT * FROM {$model->table} WHERE name LIKE ?", ['%сы%']);
        $data = $model->findLike('Джи', 'name');
        debug($data);
        $title = 'PAGE TITLE';
//        $this->set(compact('name', 'hi', 'colors', 'title'));
        $this->set(compact('title', 'product'));
    }

}