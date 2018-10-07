<?php

include 'Format/FormatInterface.php';
include 'Format/Json.php';
include 'Format/Xml.php';
include 'Formater.php';

$format = isset($argv[1]) ? $argv[1] : false;

$data = array(
    'bla' => 'blub',
    'foo' => 'bar',
    'another_array' => array(
        'stack' => 'overflow',
    ),
);
if (!$format) {
    var_dump($data);
} else {
    $formater = new Formater($format);
    $result = $formater->convert($data);

    echo $result;
}
