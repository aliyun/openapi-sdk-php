<?php

namespace AlibabaCloud\Uis\V20180821;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUisConnectionId()
 * @method $this withUisConnectionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSslConfig()
 * @method $this withSslConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUisNodeId()
 * @method $this withUisNodeId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getUisProtocol()
 * @method $this withUisProtocol($value)
 * @method string getGreConfig()
 * @method $this withGreConfig($value)
 */
class ModifyUisConnectionAttribute extends Rpc
{
    public $product = 'Uis';

    public $version = '2018-08-21';

    public $method = 'POST';

    public $serviceCode = 'uis';
}
