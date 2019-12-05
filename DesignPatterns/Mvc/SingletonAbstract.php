<?php

/**
 * Class SingletonAbstract.
 */
class SingletonAbstract
{
    private static $_instances = array();

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
        $class = get_called_class();
        if (!isset(self::$_instances[$class])) {
            self::$_instances[$class] = new $class();
        }
        return self::$_instances[$class];
    }
}
