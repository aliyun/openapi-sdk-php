<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Rpc;

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getCacheContent()
 * @method $this withCacheContent($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTTL()
 * @method $this withTTL($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class SetFileCacheExpiredConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2018-05-10';

    public $method = 'POST';
}
