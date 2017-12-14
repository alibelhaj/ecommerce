<?php

namespace Ecommerce\Repository;

class ProductRepository
{
    const TYPE = "product";

    public function getType()
    {
        return self::TYPE;
    }
}