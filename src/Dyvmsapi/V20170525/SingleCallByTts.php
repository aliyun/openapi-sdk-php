<?php

namespace AlibabaCloud\Dyvmsapi\V20170525;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTtsCode()
 * @method $this withTtsCode($value)
 * @method string getPlayTimes()
 * @method $this withPlayTimes($value)
 * @method string getTtsParam()
 * @method $this withTtsParam($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSpeed()
 * @method $this withSpeed($value)
 * @method string getVolume()
 * @method $this withVolume($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getCalledShowNumber()
 * @method $this withCalledShowNumber($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 */
class SingleCallByTts extends Rpc
{
    public $product = 'Dyvmsapi';

    public $version = '2017-05-25';

    public $method = 'POST';
}
