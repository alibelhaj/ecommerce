<?php

namespace Ecommerce\Repository;

class CustomerRepository  extends BaseRepository
{
    const TYPE = "customer";

    public function getType()
    {
        return self::TYPE;
    }
}