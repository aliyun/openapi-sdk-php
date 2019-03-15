<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Rpc;

/**
 * @method string getServiceRequestParam()
 * @method $this withServiceRequestParam($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getServiceRequestType()
 * @method $this withServiceRequestType($value)
 */
class RequestServiceOfCloudDBExpert extends Rpc
{
    public $product = 'Rds';

    public $version = '2014-08-15';

    public $method = 'POST';

    public $serviceCode = 'rds';
}
