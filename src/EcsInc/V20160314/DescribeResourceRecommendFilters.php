<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeResourceRecommendFilters
 *
 * @method string getProduct()
 * @method string getAttributeValue()
 * @method string getAttributeName()
 * @method string getMaxItems()
 * @method string getResourceType()
 */
class DescribeResourceRecommendFilters extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EcsInc';

    /**
     * @var string
     */
    public $version = '2016-03-14';

    /**
     * @var string
     */
    public $action = 'DescribeResourceRecommendFilters';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ecs';

    /**
     * @param string $product
     *
     * @return $this
     */
    public function withProduct($product)
    {
        $this->data['Product'] = $product;
        $this->options['query']['Product'] = $product;

        return $this;
    }

    /**
     * @param string $attributeValue
     *
     * @return $this
     */
    public function withAttributeValue($attributeValue)
    {
        $this->data['AttributeValue'] = $attributeValue;
        $this->options['query']['AttributeValue'] = $attributeValue;

        return $this;
    }

    /**
     * @param string $attributeName
     *
     * @return $this
     */
    public function withAttributeName($attributeName)
    {
        $this->data['AttributeName'] = $attributeName;
        $this->options['query']['AttributeName'] = $attributeName;

        return $this;
    }

    /**
     * @param string $maxItems
     *
     * @return $this
     */
    public function withMaxItems($maxItems)
    {
        $this->data['MaxItems'] = $maxItems;
        $this->options['query']['MaxItems'] = $maxItems;

        return $this;
    }

    /**
     * @param string $resourceType
     *
     * @return $this
     */
    public function withResourceType($resourceType)
    {
        $this->data['ResourceType'] = $resourceType;
        $this->options['query']['ResourceType'] = $resourceType;

        return $this;
    }
}
