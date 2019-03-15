<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method string getCallId()
 * @method $this withCallId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactId()
 * @method $this withContactId($value)
 */
class ModifyPrivacyNumberCallDetail extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';
}
