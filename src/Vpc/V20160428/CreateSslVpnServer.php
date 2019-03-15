<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * @method string getCipher()
 * @method $this withCipher($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientIpPool()
 * @method $this withClientIpPool($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCompress()
 * @method $this withCompress($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLocalSubnet()
 * @method $this withLocalSubnet($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getProto()
 * @method $this withProto($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateSslVpnServer extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';
}
