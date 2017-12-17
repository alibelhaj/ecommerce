<?php

namespace Ecommerce\Repository;

class ProductRepository  extends BaseRepository
{
    const TYPE = "product";

    public function getType()
    {
        return self::TYPE;
    }
}