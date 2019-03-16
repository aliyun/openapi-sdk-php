<?php

namespace AlibabaCloud\YqBridge\V20170810;

use AlibabaCloud\Rpc;

class V20170810Rpc extends Rpc
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
class GetUserLabel extends V20170810Rpc
{
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 */
class CheckHavanaIdConvert extends V20170810Rpc
{
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 */
class ResetAccountPwdInWhiteList extends V20170810Rpc
{
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 */
class HavanaIdConvert extends V20170810Rpc
{
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 */
class CheckCloudUser extends V20170810Rpc
{
}
