<?php
namespace Ecommerce\DataFixtures;

class ProductDataFixtures extends BaseDataFixtures
{
    public function getType()
    {
        return "product";
    }

    public function getFixtures()
    {
        return [
            array(
                "name" => "Ali",
                "slug" => "Be",
                "active" => true
            ),
            array(
                "name" => "Samsung",
                "slug" => "samsung",
                "active" => true
            )
        ];
    }
}