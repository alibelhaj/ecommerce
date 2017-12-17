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
                'firstname' => 'Ali',
                'lastname' => 'Belhaj',
                'email' => 'ali.belhadjj@gmail.com',
                'password' => '123456',
                'active' => true,
            ), array(
                'firstname' => 'Test',
                'lastname' => 'Test',
                'email' => 'test@gmail.com',
                'password' => '123456',
                'active' => true,
            ),
        ];
    }
}