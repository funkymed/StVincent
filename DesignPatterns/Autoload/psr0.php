<?php

/**
 * @param $class_name
 */
function autoload($class_name)
{
    $filename = sprintf('Classes/%s.php', $class_name);
    require_once $filename;
}

spl_autoload_register('autoload');

$bar = new Bar();
var_dump($bar);

$foo = new Foo();
var_dump($foo);
