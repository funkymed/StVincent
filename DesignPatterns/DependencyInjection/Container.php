<?php

class Container implements ContainerInterface
{
    private $items = array();

    public function __construct()
    {
    }

    /**
     * Check if container has id.
     *
     * @param $id
     *
     * @return bool
     */
    public function has($id)
    {
        return isset($this->items[$id]) ? true : false;
    }

    /**
     * get service by id.
     *
     * @param $id
     *
     * @return mixed
     */
    public function get($id)
    {
        return $this->has($id) ? $this->items[$id] : false;
    }

    /**
     * add service to container.
     *
     * @param $id
     * @param $service
     */
    public function add($id, $service)
    {
        if (!$this->has($id)) {
            $this->items[$id] = $service;
        }
    }
}
