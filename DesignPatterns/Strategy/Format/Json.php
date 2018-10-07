<?php

/**
 * Class Json.
 */
class Json implements FormatInterface
{
    /**
     * @param array $data
     *
     * @return false|string
     */
    public function convert($data)
    {
        return json_encode($data);
    }
}
