<?php

namespace app\core;

use app\controllers;

class  App{

    protected $controller = 'app\controllers\HomeController';

    protected $method = 'index';

    protected $params = [];

    public function __construct()
    {
        try
        {
            Session::init();
            $url = $this->parseUrl();
            $controller = '';
            if(!empty($url)){
                $controller = 'app\controllers\\'.ucfirst(strtolower($url[0])) . 'Controller';
            }
                if(class_exists($controller)){
                    $this->controller = $controller;
                    unset($url[0]);
                }

                $this ->controller = new $this->controller;

                if(isset($url[1])){
                    if (method_exists($this->controller,$url[1])){
                        $this->method = $url[1];
                        unset($url[1]);
                    }
                }

                $this->params = $url ? array_values($url) : [];
            call_user_func_array([$this->controller,$this->method],$this->params);
            unset($_GET['url']);
        }catch (\Exception $e)
        {

        }
    }

    public function parseUrl()
    {
        if(isset($_GET['url'])){
            return explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
        }
    }
}