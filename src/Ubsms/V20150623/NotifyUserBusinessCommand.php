<?php

namespace AlibabaCloud\Ubsms\V20150623;

use AlibabaCloud\Rpc;

/**
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getServiceCode()
 * @method $this withServiceCode($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCmd()
 * @method $this withCmd($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class NotifyUserBusinessCommand extends Rpc
{
    public $product = 'Ubsms';

    public $version = '2015-06-23';

    public $method = 'POST';
}
