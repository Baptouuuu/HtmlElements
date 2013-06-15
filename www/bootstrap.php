<?php

require_once "../vendor/autoload.php";

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;

$sc = new ContainerBuilder();

$loader = new YamlFileLoader(
    $sc,
    new FileLocator(__DIR__.'/config')
);
$loader->load('services.yml');