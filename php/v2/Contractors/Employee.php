<?php

namespace NW\WebService\References\Contractors;

class Employee extends Contractor
{
    /**
     * @param $resellerId
     * @param $event
     * @return string[]
     */
    public static function getEmailsByPermit($resellerId, $event)
    {
        return ['someemeil@example.com', 'someemeil2@example.com'];
    }
}
