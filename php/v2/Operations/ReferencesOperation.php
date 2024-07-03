<?php

namespace NW\WebService\References\Operations;

abstract class ReferencesOperation
{
    /**
     * @return array
     */
    abstract public function doOperation(): array;

    /**
     * @param $pName
     * @return mixed
     */
    public function getRequest($pName)
    {
        return $_REQUEST[$pName];
    }
}


