<?php
/**
 * Created by PhpStorm.
 * User: marian
 * Date: 6/23/15
 * Time: 7:57 PM
 */

namespace app\controllers;

use app\core\Session;
use app\models\Cart;
use app\models\Domain;

class Controller {

    public function model($model)
    {
        require_once '../app/models/'.$model.'.php';
        return new $model;
    }

    public function __construct()
    {
        $domain = new Domain();

        $this->view('menu',[
            'domain' => $domain->selectAll('domain'),
            'cart_num'   => Cart::getProductsCount(),
            'cart_sum'   => Cart::getSumProductsSum()
        ]);
    }


    public function view($view, $data =[])
    {
        require_once '../app/views/header.php';
        require_once '../app/views/'.$view.'.php';
        require_once '../app/views/menu.php';
//        require_once '../app/views/footer.php';
    }

    protected function redirect($path)
    {
        header('Location:'.$path);
    }
    protected function redirectBack()
    {
        $this->redirect($_SERVER['HTTP_REFERER']);
    }
} 