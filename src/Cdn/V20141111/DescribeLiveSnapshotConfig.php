<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 */
class DescribeLiveSnapshotConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';
}
