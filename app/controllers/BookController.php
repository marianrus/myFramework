<?php

namespace app\controllers;

use app\models\Book;
use app\models\Domain;

class BookController  extends Controller{

    public function index($bookId)
    {
      $book          = new Book();

      $this->view('book/index',[
          'book'  => $book->getBook($bookId),
      ]);
    }

    public function create()
    {
        die('asdada');
    }
} 