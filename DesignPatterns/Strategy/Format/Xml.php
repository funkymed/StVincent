<?php

/**
 * Class Xml.
 */
class Xml implements FormatInterface
{
    /**
     * @param array $data
     *
     * @return mixed
     */
    public function convert($data)
    {
        $xml = new SimpleXMLElement('<root/>');
        array_walk_recursive($data, array($xml, 'addChild'));

        return $xml->asXML();
    }
}
