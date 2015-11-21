<?php

namespace app\models;

class Book extends Model
{
     protected  $table = 'books';

    public function getBooKsByDomain($domainId)
    {
        return $this->selectAll('books','domain_id = '.$domainId,null, \PDO::FETCH_ASSOC
//            ,'domain on books.domain_id = domain.id','books.*, domain.name domain_name'
        );
    }

    public function getBook($bookId)
    {
        return $this->selectAll('books','id = '.$bookId);
    }

} 