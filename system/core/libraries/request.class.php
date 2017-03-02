<?php

class request
{
    /**
     * gets a value from the $_GET global
     *
     * returns the value from $_GET with the key $key
     * if not present in $_GET, returns $default
     */
    public static function get($key, $default = null)
    {
        if(isset($_GET[$key]))
        {
            return $_GET[$key];
        }
        else
        {
            return $default;
        }
    }

    /**
     * gets a value from the $_POST global
     *
     * returns the value from $_POST with the key $key
     * if not present in $_POST, returns $default
     */
    public static function post($key, $default = null)
    {
        if(isset($_POST[$key]))
        {
            return $_POST[$key];
        }
        else
        {
            return $default;
        }
    }

    /**
     * return true if the request is POST
     */
    public static function isPost()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}