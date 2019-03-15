<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method array getFilter()
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getMaxItems()
 * @method $this withMaxItems($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class DescribeResources extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param array $filter
     *
     * @return $this
     */
    public function withFilter(array $filter)
    {
        $this->data['Filter'] = $filter;
        foreach ($filter as $i => $iValue) {
            $this->options['query']['Filter.' . ($i + 1) . '.AttributeValue'] = $filter[$i]['AttributeValue'];
            $this->options['query']['Filter.' . ($i + 1) . '.AttributeName'] = $filter[$i]['AttributeName'];
            $this->options['query']['Filter.' . ($i + 1) . '.Operation'] = $filter[$i]['Operation'];
        }

        return $this;
    }
}
