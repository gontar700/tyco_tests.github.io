<?php

/**
 * Created by PhpStorm.
 * User: danielgontar
 * Date: 3/21/17
 * Time: 9:08 AM
 */
class DbConnectionException extends Exception
{
    function __construct($str)
    {
        parent::__construct ($str);
    }
}
?>