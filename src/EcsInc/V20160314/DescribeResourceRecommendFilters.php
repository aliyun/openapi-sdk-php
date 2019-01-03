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
     * @deprecated deprecated since version 2.0, Use withProduct() instead.
     *
     * @param string $product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        return $this->withProduct($product);
    }

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
     * @deprecated deprecated since version 2.0, Use withAttributeValue() instead.
     *
     * @param string $attributeValue
     *
     * @return $this
     */
    public function setAttributeValue($attributeValue)
    {
        return $this->withAttributeValue($attributeValue);
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
     * @deprecated deprecated since version 2.0, Use withAttributeName() instead.
     *
     * @param string $attributeName
     *
     * @return $this
     */
    public function setAttributeName($attributeName)
    {
        return $this->withAttributeName($attributeName);
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
     * @deprecated deprecated since version 2.0, Use withMaxItems() instead.
     *
     * @param string $maxItems
     *
     * @return $this
     */
    public function setMaxItems($maxItems)
    {
        return $this->withMaxItems($maxItems);
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
     * @deprecated deprecated since version 2.0, Use withResourceType() instead.
     *
     * @param string $resourceType
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        return $this->withResourceType($resourceType);
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
