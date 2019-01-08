<?php
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://doc.swoft.org
 * @contact  limingxin@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */
namespace SwoftTest\Cases;

use Swoft\App;
use Swoftx\Rpc\Constant;
use Swoftx\Rpc\Pool\Config\ServicePoolConfig;

class PoolTest extends AbstractTestCase
{
    public function testPool()
    {
        $pool = App::getPool(Constant::DEFAULT_POOL_NAME);
        $this->assertInstanceOf(ServicePoolConfig::class, $pool->getPoolConfig());
    }

    public function testPoolConfig()
    {
        $pool = App::getPool(Constant::DEFAULT_POOL_NAME);
        $config = $pool->getPoolConfig();

        $this->assertEquals(Constant::DEFAULT_POOL_NAME, $config->getName());
        $this->assertFalse($config->isUseProvider());
    }
}
