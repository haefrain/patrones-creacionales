<?php

require 'CacheCustom.php';

$cache = CacheCustom::getInstance();
$cache2 = CacheCustom::getInstance();

$cache->set('prueba', 'valor 1');

echo $cache2->get('prueba') . "\n";

$cache3 = CacheCustom::getInstance();

echo $cache3->get('prueba');

// $cache4 = new CacheCustom; // Esto da un error siendo el constructor privado
