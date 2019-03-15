<?php

namespace AlibabaCloud\SasApi\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getSensType()
 * @method $this withSensType($value)
 * @method string getDataVersion()
 * @method $this withDataVersion($value)
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
 */
class GetPhoneProfile extends Rpc
{
    public $product = 'Sas-api';

    public $version = '2017-07-05';

    public $method = 'POST';
}
