<?php

namespace app\models;

class Domain extends Model
{
     protected  $table = 'domain';

    public function getDomain($idDomain)
    {
        return $this->selectAll('domain','id='.$idDomain);
    }
} 