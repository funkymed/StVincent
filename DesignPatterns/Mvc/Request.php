<?php

require_once 'SingletonAbstract.php';
/**
 * Class Request.
 */
class Request extends SingletonAbstract
{
    /**
     * @param $variable
     * @param bool $fallback
     *
     * @return bool
     */
    public function get($variable, $fallback = false)
    {
        switch ($this->getMethod()) {
            case 'POST':
                return isset($_POST[$variable]) ? $_POST[$variable] : $fallback;
                break;
            case 'GET':
                return isset($_GET[$variable]) ? $_GET[$variable] : $fallback;
                break;
            default:
                return $fallback;
                break;
        }
    }

    /**
     * @return string|bool
     */
    public function getMethod()
    {
        return isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : false;
    }
}
