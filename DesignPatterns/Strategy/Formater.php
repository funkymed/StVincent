<?php

/**
 * Class Formater.
 */
class Formater
{
    private $format;

    /**
     * Formater constructor.
     *
     * @param $format
     */
    public function __construct($format)
    {
        $this->format = $format;
    }

    /**
     * @param $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }

    /**
     * @param $data
     *
     * @return false|mixed|string
     */
    public function convert($data)
    {
        switch ($this->format) {
            case 'json':
                $json = new Json();

                return $json->convert($data);
                break;
            case 'xml':
                $json = new Xml();

                return $json->convert($data);
                break;
        }
    }
}
