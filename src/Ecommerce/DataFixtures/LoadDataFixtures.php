<?php
require_once __DIR__.'/../../../core/bootstrap.php';
$className = $argv[1];
$classDataFixture = sprintf('\\Ecommerce\\DataFixtures\\%sDataFixtures',ucfirst($className));
$objectFixtures = new $classDataFixture();
$objectFixtures->loadFixtures();