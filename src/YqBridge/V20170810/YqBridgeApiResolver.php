<?php

namespace AlibabaCloud\YqBridge\V20170810;

use AlibabaCloud\ApiResolverTrait;

/**
 * @method GetUserLabel getUserLabel(array $options = [])
 * @method CheckHavanaIdConvert checkHavanaIdConvert(array $options = [])
 * @method ResetAccountPwdInWhiteList resetAccountPwdInWhiteList(array $options = [])
 * @method HavanaIdConvert havanaIdConvert(array $options = [])
 * @method CheckCloudUser checkCloudUser(array $options = [])
 */
class YqBridgeApiResolver
{
    use ApiResolverTrait;
}

class Rpc extends \AlibabaCloud\Rpc
{
    /** @var string */
    public $product = 'YqBridge';

    /** @var string */
    public $version = '2017-08-10';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 */
class GetUserLabel extends Rpc
{
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 */
class CheckHavanaIdConvert extends Rpc
{
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 */
class ResetAccountPwdInWhiteList extends Rpc
{
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 */
class HavanaIdConvert extends Rpc
{
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 */
class CheckCloudUser extends Rpc
{
}
