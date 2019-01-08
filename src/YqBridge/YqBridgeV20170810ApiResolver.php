<?php

namespace AlibabaCloud\YqBridge;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the YqBridge based on the method name as the Api name.
 *
 * @package   AlibabaCloud\YqBridge
 *
 * @method V20170810\CheckCloudUser checkCloudUser(array $options = [])
 * @method V20170810\CheckHavanaIdConvert checkHavanaIdConvert(array $options = [])
 * @method V20170810\GetUserLabel getUserLabel(array $options = [])
 * @method V20170810\HavanaIdConvert havanaIdConvert(array $options = [])
 * @method V20170810\ResetAccountPwdInWhiteList resetAccountPwdInWhiteList(array $options = [])
 */
class YqBridgeV20170810ApiResolver
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\YqBridge\\V20170810';
}
