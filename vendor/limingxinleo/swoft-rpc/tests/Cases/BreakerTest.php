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

use Swoftx\Rpc\Constant;

class BreakerTest extends AbstractTestCase
{
    public function testBreaker()
    {
        $breaker = breaker(Constant::DEFAULT_BREAKER_NAME);

        $this->assertEquals(3, $breaker->getSwitchToFailCount());
        $this->assertEquals(3, $breaker->getSwitchToSuccessCount());
        $this->assertEquals(500, $breaker->getDelaySwitchTimer());
    }
}
