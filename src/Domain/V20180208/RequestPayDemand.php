<?php

namespace AlibabaCloud\Domain\V20180208;

use AlibabaCloud\Rpc;

/**
 * Api RequestPayDemand
 *
 * @method string getPrice()
 * @method string getBizId()
 * @method string getDomainName()
 * @method string getProduceType()
 * @method string getMessage()
 */
class RequestPayDemand extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-02-08';

    public $method = 'POST';

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
