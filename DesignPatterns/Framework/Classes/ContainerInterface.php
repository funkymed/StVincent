<?php

namespace Classes;

interface ContainerInterface
{
    public function get($id);

    public function has($id);
}
