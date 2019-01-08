<?php
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://doc.swoft.org
 * @contact  limingxin@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace Swoftx\Rpc\Pool;

use Swoftx\Rpc\Pool\Config\ServicePoolConfig;
use Swoft\Bean\Annotation\Inject;
use Swoft\Bean\Annotation\Pool;
use Swoft\Rpc\Client\Pool\ServicePool as SwoftServicePool;
use Swoftx\Rpc\Constant;

/**
 * the pool of user service
 *
 * @Pool(name=Constant::DEFAULT_POOL_NAME)
 */
class ServicePool extends SwoftServicePool
{
    /**
     * @Inject()
     *
     * @var ServicePoolConfig
     */
    protected $poolConfig;
}
