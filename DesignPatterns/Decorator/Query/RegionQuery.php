<?php

class RegionQuery extends SearchDecorator
{
    public function __construct(QueryInterface $query)
    {
        parent::__construct($query);
    }

    protected function getName()
    {
        return 'region';
    }
}
