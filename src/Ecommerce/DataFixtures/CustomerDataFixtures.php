<?php
namespace Ecommerce\DataFixtures;

class CustomerDataFixtures  extends BaseDataFixtures
{
    public function getType()
    {
        return "customer";
    }

    public function getFixtures()
    {
        return [
            array(
                "name" => "Appele",
                "slug" => "appele",
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