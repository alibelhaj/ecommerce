<?php
namespace Ecommerce\DataFixtures;

abstract class BaseDataFixtures
{
    public function loadFixtures()
    {
        $type = $this->getType();
        $fixtures = $this->getFixtures();
        foreach ($fixtures as $fixture) {
            $repositoryClass = sprintf('\\Ecommerce\\Repository\\%sRepository', ucfirst($type));
            $repository = new $repositoryClass();
            $repository->create($fixture);
        }
    }
}