<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * @method string getAuthKey()
 * @method $this withAuthKey($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAuthType()
 * @method $this withAuthType($value)
 */
class SetLiveStreamsNotifyUrlConfig extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';
}
