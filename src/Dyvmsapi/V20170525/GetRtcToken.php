<?php

namespace AlibabaCloud\Dyvmsapi\V20170525;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getIsCustomAccount()
 * @method $this withIsCustomAccount($value)
 */
class GetRtcToken extends Rpc
{
    public $product = 'Dyvmsapi';

    public $version = '2017-05-25';

    public $method = 'POST';
}
