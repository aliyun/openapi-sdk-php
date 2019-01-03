<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateProduct
 *
 * @method string getDataFormat()
 * @method string getNodeType()
 * @method string getId2()
 * @method string getNetType()
 * @method string getProductName()
 * @method string getDescription()
 * @method string getProtocolType()
 * @method string getAliyunCommodityCode()
 * @method string getCategoryId()
 */
class CreateProduct extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Iot';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'CreateProduct';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withDataFormat() instead.
     *
     * @param string $dataFormat
     *
     * @return $this
     */
    public function setDataFormat($dataFormat)
    {
        return $this->withDataFormat($dataFormat);
    }

    /**
     * @param string $dataFormat
     *
     * @return $this
     */
    public function withDataFormat($dataFormat)
    {
        $this->data['DataFormat'] = $dataFormat;
        $this->options['query']['DataFormat'] = $dataFormat;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNodeType() instead.
     *
     * @param string $nodeType
     *
     * @return $this
     */
    public function setNodeType($nodeType)
    {
        return $this->withNodeType($nodeType);
    }

    /**
     * @param string $nodeType
     *
     * @return $this
     */
    public function withNodeType($nodeType)
    {
        $this->data['NodeType'] = $nodeType;
        $this->options['query']['NodeType'] = $nodeType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withId2() instead.
     *
     * @param string $id2
     *
     * @return $this
     */
    public function setId2($id2)
    {
        return $this->withId2($id2);
    }

    /**
     * @param string $id2
     *
     * @return $this
     */
    public function withId2($id2)
    {
        $this->data['Id2'] = $id2;
        $this->options['query']['Id2'] = $id2;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNetType() instead.
     *
     * @param string $netType
     *
     * @return $this
     */
    public function setNetType($netType)
    {
        return $this->withNetType($netType);
    }

    /**
     * @param string $netType
     *
     * @return $this
     */
    public function withNetType($netType)
    {
        $this->data['NetType'] = $netType;
        $this->options['query']['NetType'] = $netType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProductName() instead.
     *
     * @param string $productName
     *
     * @return $this
     */
    public function setProductName($productName)
    {
        return $this->withProductName($productName);
    }

    /**
     * @param string $productName
     *
     * @return $this
     */
    public function withProductName($productName)
    {
        $this->data['ProductName'] = $productName;
        $this->options['query']['ProductName'] = $productName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDescription() instead.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->withDescription($description);
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProtocolType() instead.
     *
     * @param string $protocolType
     *
     * @return $this
     */
    public function setProtocolType($protocolType)
    {
        return $this->withProtocolType($protocolType);
    }

    /**
     * @param string $protocolType
     *
     * @return $this
     */
    public function withProtocolType($protocolType)
    {
        $this->data['ProtocolType'] = $protocolType;
        $this->options['query']['ProtocolType'] = $protocolType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAliyunCommodityCode() instead.
     *
     * @param string $aliyunCommodityCode
     *
     * @return $this
     */
    public function setAliyunCommodityCode($aliyunCommodityCode)
    {
        return $this->withAliyunCommodityCode($aliyunCommodityCode);
    }

    /**
     * @param string $aliyunCommodityCode
     *
     * @return $this
     */
    public function withAliyunCommodityCode($aliyunCommodityCode)
    {
        $this->data['AliyunCommodityCode'] = $aliyunCommodityCode;
        $this->options['query']['AliyunCommodityCode'] = $aliyunCommodityCode;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCategoryId() instead.
     *
     * @param string $categoryId
     *
     * @return $this
     */
    public function setCategoryId($categoryId)
    {
        return $this->withCategoryId($categoryId);
    }

    /**
     * @param string $categoryId
     *
     * @return $this
     */
    public function withCategoryId($categoryId)
    {
        $this->data['CategoryId'] = $categoryId;
        $this->options['query']['CategoryId'] = $categoryId;

        return $this;
    }
}
