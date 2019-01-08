<?php

$baseDir = dirname(dirname(dirname(__DIR__)));


return array (
  'limingxinleo/swoft-aop-cacheable' => 
  array (
    'name' => 'limingxinleo/swoft-aop-cacheable',
    'version' => '1.1.4.0',
    'reference' => 'a99ed18b3bda904c445fe5e56db6d9c1e093a1cf',
    'aliases' => 
    array (
      '@Swoftx/Aop/Cacheable' => $baseDir . '/vendor/limingxinleo/swoft-aop-cacheable/src',
    ),
  ),
  'limingxinleo/swoft-entity-cache' => 
  array (
    'name' => 'limingxinleo/swoft-entity-cache',
    'version' => '1.3.5.0',
    'reference' => 'a39d2dc80599a2f40fbd76259685d441456eb812',
    'aliases' => 
    array (
      '@Swoftx/Db/Entity' => $baseDir . '/vendor/limingxinleo/swoft-entity-cache/src',
    ),
  ),
  'limingxinleo/swoft-entity-event' => 
  array (
    'name' => 'limingxinleo/swoft-entity-event',
    'version' => '1.1.2.0',
    'reference' => 'c5ffea8688caf690127bc43dcb9ee242dd56dd64',
    'aliases' => 
    array (
      '@Swoftx/EntityEvent' => $baseDir . '/vendor/limingxinleo/swoft-entity-event/src',
    ),
  ),
  'limingxinleo/swoft-rpc' => 
  array (
    'name' => 'limingxinleo/swoft-rpc',
    'version' => '1.0.1.0',
    'reference' => '1cecc422da35e87e44d77965f9b2bc0c98ef5809',
    'aliases' => 
    array (
      '@Swoftx/Rpc' => $baseDir . '/vendor/limingxinleo/swoft-rpc/src',
    ),
  ),
  'limingxinleo/swoft-project' => 
  array (
    'name' => 'limingxinleo/swoft-project',
    'version' => '9999999-dev',
    'reference' => 'a6b79cff5db9b8be90ccbd7f34296510005dcfa3',
    'aliases' => 
    array (
      '@App' => $baseDir . '/app',
      '@Swoft/Test' => $baseDir . '/test',
    ),
  ),
);
