<?php


require_once 'SingletonAbstract.php';

/**
 * Class Router
 */
class Router extends SingletonAbstract
{
    private $request;

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

    public function get($var, $default)
    {
        $vars = $this->getVars();
        if($var=='controller'){
            $offset=1;
        }else{
            $offset=2;
        }
        $controller = !empty($vars[$offset]) ? $vars[$offset] : $this->request->get($var, $default);
        return $controller;
    }

}
