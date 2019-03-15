<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getRouterInterfaceId()
 * @method $this withRouterInterfaceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 */
class ModifyRouterInterfaceSpec extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';
}
