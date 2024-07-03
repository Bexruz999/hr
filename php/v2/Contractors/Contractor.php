<?php

namespace NW\WebService\References\Contractors;

/**
 * @property Seller $Seller
 */
class Contractor
{
    /**
     *
     */
    const TYPE_CUSTOMER = 0;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $type;
    /**
     * @var
     */
    public $name;

    /**
     * @param int $resellerId
     * @return self
     */
    public static function getById(int $resellerId): self
    {
        return new self($resellerId); // fakes the getById method
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->name . ' ' . $this->id;
    }
}

