<?php

namespace Ecommerce\Repository;

class CustomerRepository
{
    const TYPE = "customer";

    public function getType()
    {
        return self::TYPE;
    }
}