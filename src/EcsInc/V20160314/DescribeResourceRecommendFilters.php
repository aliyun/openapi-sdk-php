<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getAttributeValue()
 * @method $this withAttributeValue($value)
 * @method string getAttributeName()
 * @method $this withAttributeName($value)
 * @method string getMaxItems()
 * @method $this withMaxItems($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class DescribeResourceRecommendFilters extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';
}
