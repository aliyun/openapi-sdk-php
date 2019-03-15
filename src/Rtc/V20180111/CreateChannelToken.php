<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\Rpc;

/**
 * @method string getSessionId()
 * @method $this withSessionId($value)
 * @method string getUId()
 * @method $this withUId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNonce()
 * @method $this withNonce($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class CreateChannelToken extends Rpc
{
    public $product = 'rtc';

    public $version = '2018-01-11';

    public $method = 'POST';

    public $serviceCode = 'rtc';
}
