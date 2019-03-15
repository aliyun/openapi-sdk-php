<?php

namespace AlibabaCloud\Uis\V20180821;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOriginalPort()
 * @method $this withOriginalPort($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOriginalIp()
 * @method $this withOriginalIp($value)
 * @method string getDestinationIp()
 * @method $this withDestinationIp($value)
 * @method string getDestinationPort()
 * @method $this withDestinationPort($value)
 * @method string getUisNodeId()
 * @method $this withUisNodeId($value)
 * @method string getUisDnatId()
 * @method $this withUisDnatId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyDnatEntry extends Rpc
{
    public $product = 'Uis';

    public $version = '2018-08-21';

    public $method = 'POST';

    public $serviceCode = 'uis';
}
