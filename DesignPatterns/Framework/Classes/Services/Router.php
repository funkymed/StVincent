<?php

namespace Classes\Services;

use Classes\SingletonAbstract;

/**
 * Class Router
 */
class Router extends SingletonAbstract
{
    private $request;
    const VAR_CONTROLLER = 'controller';
    const VAR_ACTION = 'action';
    const VAR_ID = 'id';

    public function setRequest($request){
        $this->request = $request;
    }

    /**
     * get All vars from $_SERVER['REQUEST_URI']
     * @return array
     */
    public function getVars()
    {
        $request_uri = explode('/', trim($_SERVER['REQUEST_URI']));
        return $request_uri;
    }

    public function get($var, $default=null)
    {
        $vars = $this->getVars();

        switch($var){
            case self::VAR_CONTROLLER:
                $offset=1;
                break;
            case self::VAR_ACTION:
                $offset=2;
                break;
            case self::VAR_ID:
                $offset=3;
                break;
            default:
                return $default;
                break;
        }

        $controller = !empty($vars[$offset]) ? $vars[$offset] : $default;
        return $controller;
    }

}
