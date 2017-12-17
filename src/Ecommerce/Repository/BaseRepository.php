<?php
namespace Ecommerce\Repository;

use RedBeanPHP\R;

abstract class BaseRepository
{
    abstract function getType();

    public function create($entity)
    {
        $object = R::dispense($this->getType());
        foreach ($entity as $property => $value) {
            $object->$property = $value;
        }
        R::store($object);
    }
}