<?php

namespace AlibabaCloud\YqBridge\V20170810;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the YqBridge based on the method name as the Api name.
 *
 * @package   AlibabaCloud\YqBridge\V20170810
 *
 * @method static CheckCloudUser checkCloudUser(array $options = [])
 * @method static CheckHavanaIdConvert checkHavanaIdConvert(array $options = [])
 * @method static GetUserLabel getUserLabel(array $options = [])
 * @method static HavanaIdConvert havanaIdConvert(array $options = [])
 * @method static ResetAccountPwdInWhiteList resetAccountPwdInWhiteList(array $options = [])
 * @method static YqBridgeApiResolver yqBridgeApiResolver(array $options = [])
 */
class YqBridge
{
    use ApiResolverTrait;
}
