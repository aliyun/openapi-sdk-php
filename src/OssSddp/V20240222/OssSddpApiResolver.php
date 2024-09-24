<?php

namespace AlibabaCloud\OssSddp\V20240222;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method GetSddpVersion getSddpVersion(array $options = [])
 * @method UpgradeSddpVersion upgradeSddpVersion(array $options = [])
 */
class OssSddpApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'OssSddp';

    /** @var string */
    public $version = '2024-02-22';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 */
class GetSddpVersion extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOssVersion()
 * @method $this withOssVersion($value)
 */
class UpgradeSddpVersion extends Rpc
{
}
