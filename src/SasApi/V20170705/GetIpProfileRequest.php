<?php

namespace AlibabaCloud\SasApi\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method string getDeviceIdMd5()
 * @method $this withDeviceIdMd5($value)
 * @method string getCarrier()
 * @method $this withCarrier($value)
 * @method string getOs()
 * @method $this withOs($value)
 * @method string getRequestUrl()
 * @method $this withRequestUrl($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getUserAgent()
 * @method $this withUserAgent($value)
 * @method string getConnectionType()
 * @method $this withConnectionType($value)
 * @method string getSensType()
 * @method $this withSensType($value)
 * @method string getDeviceType()
 * @method $this withDeviceType($value)
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
 */
class GetIpProfileRequest extends Rpc
{
    public $product = 'Sas-api';

    public $version = '2017-07-05';

    public $method = 'POST';
}
