<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class ApplyRecordToken extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';
}
