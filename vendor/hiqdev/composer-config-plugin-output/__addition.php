<?php

$baseDir = dirname(dirname(dirname(__DIR__)));


return array (
  'aliases' => 
  array (
    '@Swoftx/Aop/Cacheable' => $baseDir . '/vendor/limingxinleo/swoft-aop-cacheable/src',
    '@Swoftx/Db/Entity' => $baseDir . '/vendor/limingxinleo/swoft-entity-cache/src',
    '@Swoftx/EntityEvent' => $baseDir . '/vendor/limingxinleo/swoft-entity-event/src',
    '@Swoftx/Rpc' => $baseDir . '/vendor/limingxinleo/swoft-rpc/src',
    '@App' => $baseDir . '/app',
    '@Swoft/Test' => $baseDir . '/test',
  ),
);
