<?php

namespace AlibabaCloud\TeslaDam;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the TeslaDam based on the method name as the Api name.
 *
 * @package   AlibabaCloud\TeslaDam
 *
 * @method static V20180118\Action action(array $options = [])
 * @method static V20180118\ActionDiskCheck actionDiskCheck(array $options = [])
 * @method static V20180118\ActionDiskMask actionDiskMask(array $options = [])
 * @method static V20180118\ActionDiskRma actionDiskRma(array $options = [])
 * @method static V20180118\HostGets hostGets(array $options = [])
 */
class TeslaDamV20180118
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\TeslaDam\\V20180118';
}
