<?php

include 'ContainerInterface.php';
include 'Container.php';

$container = new Container();

$pdo = new PDO('mysql:host=192.168.99.100:3306;', 'root', 'root');

$container->add('database', $pdo);

var_dump($container);
