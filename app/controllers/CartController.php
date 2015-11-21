<?php

namespace app\controllers;

use app\core\Session;
use app\models\Book;
use app\models\Cart;
use app\models\Domain;

class CartController  extends Controller
{

    public function add()
    {
        $book  = $_POST;
        Session::set('cart' , [
            'book_id' => $book['book_id'],
            'quantity' => $book['qty'],
            'price'    => $book['book_price']
        ]);
        $this->redirectBack();
    }

    public function index()
    {
        $this->view('cart/index',[
            'cart'      => Cart::getProducts(),
        ]);
    }

    public function delete($productId)
    {
        Cart::deleteProduct($productId);
        $this->redirectBack();
    }

    public function modify($productId)
    {
        Cart::modifyProduct($productId,(int)$_GET['qty']);
        $this->redirectBack();
    }

    public function checkout()
    {
        if($_POST){
           Cart::saveCart($_POST);
           Session::destroy();
           echo "Comanda a fost efectuata. Multumim!";
        }

        $this->view('cart/checkout',[
            'cart'  => Cart::getProducts(),
            'cartNum'   => Cart::getProductsCount(),
            'cartTotal' => Cart::getSumProductsSum()
        ]);
    }
} 