<?php

namespace AlibabaCloud\Cloudauth\V20180916;

use AlibabaCloud\Rpc;

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBiz()
 * @method $this withBiz($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getBinding()
 * @method $this withBinding($value)
 * @method string getVerifyConfigs()
 * @method $this withVerifyConfigs($value)
 * @method string getTicketId()
 * @method $this withTicketId($value)
 */
class GetVerifyToken extends Rpc
{
    public $product = 'Cloudauth';

    public $version = '2018-09-16';

    public $scheme = 'https';

    public $method = 'POST';

    public $serviceCode = 'cloudauth';
}
