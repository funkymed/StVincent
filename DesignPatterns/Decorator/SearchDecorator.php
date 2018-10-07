<?php

abstract class SearchDecorator implements QueryInterface
{
    protected $query;

    public function __construct(QueryInterface $query)
    {
        $this->query = $query;
    }

    abstract protected function getName();

    /**
     * Returns the list of all queries.
     *
     * @return array
     */
    public function getQueries()
    {
        $queries = $this->query->getQueries();
        $queries[] = $this->getName();

        return $queries;
    }
}
