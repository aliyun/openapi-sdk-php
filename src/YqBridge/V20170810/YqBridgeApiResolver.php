<?php

namespace AlibabaCloud\YqBridge\V20170810;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method GetUserLabel getUserLabel(array $options = [])
 * @method ResetAccountPwdInWhiteList resetAccountPwdInWhiteList(array $options = [])
 * @method HavanaIdConvert havanaIdConvert(array $options = [])
 * @method CheckCloudUser checkCloudUser(array $options = [])
 */
class YqBridgeApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
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
