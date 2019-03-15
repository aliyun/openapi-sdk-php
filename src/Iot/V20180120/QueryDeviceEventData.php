<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * @method string getAsc()
 * @method $this withAsc($value)
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class QueryDeviceEventData extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

    public $method = 'POST';
}
