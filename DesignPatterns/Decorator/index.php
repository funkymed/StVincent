<?php

include 'QueryInterface.php';
include 'SearchDecorator.php';
include 'Search.php';

include 'Query/PriceQuery.php';
include 'Query/SurfaceQuery.php';
include 'Query/TypeQuery.php';
include 'Query/RegionQuery.php';

$search = new Search();

//$search = new PriceQuery(new SizeQuery(new TypeQuery(new ZoneQuery($search))));

$search = new PriceQuery($search);
$search = new SurfaceQuery($search);
$search = new TypeQuery($search);
$search = new RegionQuery($search);

var_dump($search->getQueries());
