<?php

namespace Controller;

use Classes\Container;

/**
 * Class ControllerAbstract.
 */
abstract class ControllerAbstract
{
    protected $template_dir = 'Templates/';
    protected $vars = array();
    private $container;

    /**
     * ControllerAbstract constructor.
     *
     * @param Container $container
     * @param null $template_dir
     */
    public function __construct(Container $container, $template_dir = null)
    {
        $this->vars = [];
        if ($template_dir !== null) {
            // Check here whether this directory really exists
            $this->template_dir = $template_dir;
        }
        $this->container = $container;
    }

    public function getContainer(){
        return $this->container;
    }

    /**
     * @param $template_file
     *
     * @throws Exception
     */
    public function render($template_file)
    {
        if (file_exists($this->template_dir.$template_file)) {
            include $this->template_dir.$template_file;
        } else {
            throw new Exception('no template file '.$template_file.' present in directory '.$this->template_dir);
        }
    }

    /**
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        $this->vars[$name] = $value;
    }

    /**
     * @param $name
     *
     * @return mixed|
     */
    public function __get($name)
    {
        return !empty($this->vars[$name]) ? $this->vars[$name] : '';
    }
}
