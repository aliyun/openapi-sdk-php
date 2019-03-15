<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOwnerBid()
 * @method $this withOwnerBid($value)
 * @method string getOwnerUid()
 * @method $this withOwnerUid($value)
 * @method string getTagValue()
 * @method $this withTagValue($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getRelatedKey()
 * @method $this withRelatedKey($value)
 */
class DescribeResourcesBySystemTag extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';
}
