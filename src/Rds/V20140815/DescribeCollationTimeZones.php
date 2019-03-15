<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCollationTimeZones extends Rpc
{
    public $product = 'Rds';

    public $version = '2014-08-15';

    public $method = 'POST';

    public $serviceCode = 'rds';
}
