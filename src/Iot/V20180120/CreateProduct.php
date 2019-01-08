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
