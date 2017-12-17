<?php
namespace Ecommerce\DataFixtures;

class CategoryDataFixtures  extends BaseDataFixtures
{
    public function getType()
    {
        return "category";
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