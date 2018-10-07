<?php

/**
 * Class SingletonAbstract.
 */
class SingletonAbstract
{
    private static $_instance = null;

    /**
     * Router constructor.
     */
    private function __construct()
    {
    }

    /**
     * @return null|SingletonAbstract
     */
    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new static();
        }

        return self::$_instance;
    }
}
