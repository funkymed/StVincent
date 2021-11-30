<?php

namespace App;

use Classes\Test;

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__).DS);

session_start();

require_once'Autoloader.php';

Autoloader::register();

$test = new Test();

var_dump($test);
