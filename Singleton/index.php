<?php

require 'CacheCustom.php';
function cachingData($value) {
    $cache = CacheCustom::getInstance();
    $cache->set('prueba', $value);
}

function accessData() {
    $cache = CacheCustom::getInstance();
    $prueba = $cache->get('prueba');
    echo $prueba . "\n";
}

cachingData('valor 1');

accessData();

cachingData('valor 2');

accessData();
