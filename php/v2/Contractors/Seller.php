<?php

namespace NW\WebService\References\Contractors;

class Seller extends Contractor
{
    /**
     * @return string
     */
    public static function getResellerEmailFrom()
    {
        return 'contractor@example.com';
    }
}

