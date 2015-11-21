<?php

namespace app\models;

use app\core\Session;

class Cart extends Model
{
     protected  $table = 'cart';

    public static function getProductsCount()
    {
        return count(Session::get('cart'));
    }

    public static function getSumProductsSum()
    {
        $total = 0;
        foreach(Session::get('cart') as $cart)
        {
            $total += $cart['price'] * $cart['quantity'] ;
        }
        return $total;
    }

    public static function getProducts()
    {
        $book =  new Book();
        $cart = Session::get('cart');

        foreach($cart as &$c)
        {
            $c['book'] = $book->getBook($c['book_id'])[0];
        }
        return $cart;
    }

    public static function deleteProduct($productId)
    {
        if(empty($productId)){
            return false;
        }
        $cart = Session::get('cart');
        foreach($cart as $key => $cartProduct)
        {
            if($cartProduct['book_id'] == $productId){
                unset($cart[$key]);
            }
        }
        unset($_SESSION['cart']);
        $_SESSION['cart'] = $cart;
    }

    public static function modifyProduct($productId,$quantity)
    {
        $cart = Session::get('cart');
        foreach($cart as &$cartProduct)
        {
            if($cartProduct['book_id'] == $productId){
                 $cartProduct['quantity'] = $quantity;
            }
        }
        unset($_SESSION['cart']);
        $_SESSION['cart'] = $cart;
    }

    public static function saveCart($cart)
    {
        $self = new self;
        $self->insert('cart',$cart);
    }
} 