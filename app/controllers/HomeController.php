<?php

namespace app\controllers;

use app\models\Book;
use app\models\Domain;

class HomeController  extends Controller{

    public function index()
    {
        $book =  new Book();
        $this->view('home/index',
            [
                'newBooks' => $book->selectAll('books',null,4),
                'popularBooks' => $book->selectAll('books',null,4)
            ]);
    }

    public function create()
    {
        die('asdada');
    }
} 