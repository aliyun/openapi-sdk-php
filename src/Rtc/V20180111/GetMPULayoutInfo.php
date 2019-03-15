<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\Rpc;

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class GetMPULayoutInfo extends Rpc
{
    public $product = 'rtc';

    public $version = '2018-01-11';

    public $method = 'POST';

    public $serviceCode = 'rtc';
}
