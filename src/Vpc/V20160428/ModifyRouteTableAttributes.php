<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getKbpsBandwidth()
 * @method $this withKbpsBandwidth($value)
 * @method string getRouteTableName()
 * @method $this withRouteTableName($value)
 * @method string getResourceUid()
 * @method $this withResourceUid($value)
 * @method string getResourceBid()
 * @method $this withResourceBid($value)
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 */
class ModifyRouteTableAttributes extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';
}
