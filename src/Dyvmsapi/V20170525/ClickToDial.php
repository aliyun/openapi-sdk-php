<?php

namespace AlibabaCloud\Dyvmsapi\V20170525;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRecordFlag()
 * @method $this withRecordFlag($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCallerShowNumber()
 * @method $this withCallerShowNumber($value)
 * @method string getSessionTimeout()
 * @method $this withSessionTimeout($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getCalledShowNumber()
 * @method $this withCalledShowNumber($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 * @method string getAsrFlag()
 * @method $this withAsrFlag($value)
 * @method string getAsrModelId()
 * @method $this withAsrModelId($value)
 * @method string getCallerNumber()
 * @method $this withCallerNumber($value)
 */
class ClickToDial extends Rpc
{
    public $product = 'Dyvmsapi';

    public $version = '2017-05-25';

    public $method = 'POST';
}
