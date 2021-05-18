<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";
require_once "php/pass.php";


// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);

// database configuration parameters
$conn = array(
    'driver' => DB_DRIVER,
    'user' =>DB_USER,
    'password' => DB_PASS,
    'dbname' => DB_NAME
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
