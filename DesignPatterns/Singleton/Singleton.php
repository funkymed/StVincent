<?php

/**
 * Class Singleton.
 */
class Singleton
{
    private static $_instance = null;

    /**
     * Router constructor.
     */
    private function __construct()
    {
    }

    /**
     * @return null|Singleton
     */
    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }
}
