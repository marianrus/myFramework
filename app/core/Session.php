<?php
/**
 * Created by PhpStorm.
 * User: marian
 * Date: 11/7/15
 * Time: 6:07 PM
 */

namespace app\core;


class Session
{

    public static function init()
    {
        @session_start();
    }

    public static function set($key, $value)
    {
        $_SESSION[$key][] = $value;
    }

    public static function get($key)
    {
        if (isset($_SESSION[$key]))
            return $_SESSION[$key];
    }

    public static function destroy()
    {
        //unset($_SESSION);
        session_destroy();
    }

}