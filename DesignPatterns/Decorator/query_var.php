<?php

include 'QueryInterface.php';
include 'SearchDecorator.php';
include 'Search.php';

include 'Query/PriceQuery.php';
include 'Query/SurfaceQuery.php';
include 'Query/TypeQuery.php';
include 'Query/RegionQuery.php';

$queries = [
    'price' => PriceQuery::class,
    'surface' => SurfaceQuery::class,
    'type' => TypeQuery::class,
    'region' => RegionQuery::class,
];

$search = new Search();

foreach ($queries as $var => $classname) {
    if (isset($_GET[$var])) {
        $search = new $classname($search);
    }
}

var_dump($search->getQueries());
