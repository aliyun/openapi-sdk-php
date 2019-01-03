<?php

namespace AlibabaCloud\Domain\V20180208;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RequestPayDemand
 *
 * @method string getPrice()
 * @method string getBizId()
 * @method string getDomainName()
 * @method string getProduceType()
 * @method string getMessage()
 */
class RequestPayDemand extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Domain';

    /**
     * @var string
     */
    public $version = '2018-02-08';

    /**
     * @var string
     */
    public $action = 'RequestPayDemand';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withPrice() instead.
     *
     * @param string $price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        return $this->withPrice($price);
    }

    /**
     * @param string $price
     *
     * @return $this
     */
    public function withPrice($price)
    {
        $this->data['Price'] = $price;
        $this->options['query']['Price'] = $price;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withBizId() instead.
     *
     * @param string $bizId
     *
     * @return $this
     */
    public function setBizId($bizId)
    {
        return $this->withBizId($bizId);
    }

    /**
     * @param string $bizId
     *
     * @return $this
     */
    public function withBizId($bizId)
    {
        $this->data['BizId'] = $bizId;
        $this->options['query']['BizId'] = $bizId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDomainName() instead.
     *
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        return $this->withDomainName($domainName);
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function withDomainName($domainName)
    {
        $this->data['DomainName'] = $domainName;
        $this->options['query']['DomainName'] = $domainName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProduceType() instead.
     *
     * @param string $produceType
     *
     * @return $this
     */
    public function setProduceType($produceType)
    {
        return $this->withProduceType($produceType);
    }

    /**
     * @param string $produceType
     *
     * @return $this
     */
    public function withProduceType($produceType)
    {
        $this->data['ProduceType'] = $produceType;
        $this->options['query']['ProduceType'] = $produceType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMessage() instead.
     *
     * @param string $message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        return $this->withMessage($message);
    }

    /**
     * @param string $message
     *
     * @return $this
     */
    public function withMessage($message)
    {
        $this->data['Message'] = $message;
        $this->options['query']['Message'] = $message;

        return $this;
    }
}
