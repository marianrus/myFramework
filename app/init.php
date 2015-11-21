<?php

error_reporting(E_ERROR);
use app\controllers;

spl_autoload_register(function($class){
    $path  = '../'. str_replace('\\','/',$class) . '.php';

    if(file_exists($path)){
        require_once($path);
    }
});

require_once '../app/config/config.php';

//require_once 'database.php';
//$dataLoader = new DataLoader();
//$dataLoader->loadData();
//require_once 'core/App.php';
//require_once 'controllers/Controller.php';