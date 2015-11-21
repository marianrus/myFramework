<?php

namespace app\controllers;

use app\core\Session;
use app\models\Book;
use app\models\Domain;

class DomainController  extends Controller{

    public function index($idDomain)
    {
      $book          = new Book();
      $domain        = new Domain();
      $booksInDomain = $book->getBooKsByDomain($idDomain);

      $this->view('domain/index',[
          'books'  => $booksInDomain,
          'domain' => $domain->getDomain($idDomain)
      ]);
    }

    public function create()
    {
        die('asdada');
    }
} 