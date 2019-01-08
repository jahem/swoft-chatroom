# swoft-rpc

[![Build Status](https://travis-ci.org/limingxinleo/swoft-rpc.svg?branch=master)](https://travis-ci.org/limingxinleo/swoft-rpc)

用于封装常用的Breaker和ServicePool

自定义的Breaker和ServicePool需要继承当前类库进行实现。

安装
~~~
composer require limingxinleo/swoft-rpc
~~~

基本配置 app.php
~~~
return [
    ...
    'service' => [
        'default' => [
            'name' => 'service',
            'uri' => [
                '127.0.0.1:8099',
                '127.0.0.1:8099',
            ],
            'minActive' => 8,
            'maxActive' => 8,
            'maxWait' => 8,
            'maxWaitTime' => 3,
            'maxIdleTime' => 60,
            'timeout' => 8,
            'useProvider' => false,
            'balancer' => 'random',
            'provider' => 'consul',
        ]
    ],
    'breaker' => [
        'default' => [
            'failCount' => 3,
            'successCount' => 3,
            'delayTime' => 500,
        ],
    ],
    'components' => [
        'custom' => [
            'Swoftx\\Rpc\\'
        ],
    ],
];
~~~
