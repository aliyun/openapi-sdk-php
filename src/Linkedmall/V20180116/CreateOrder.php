<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateOrder
 *
 * @method string getBizId()
 * @method string getBizUid()
 * @method string getOutTradeId()
 * @method string getItemId()
 * @method string getQuantity()
 * @method string getTotalAmount()
 * @method string getExtJson()
 */
class CreateOrder extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'linkedmall';

    /**
     * @var string
     */
    public $version = '2018-01-16';

    /**
     * @var string
     */
    public $action = 'CreateOrder';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'linkedmall';

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
     * @param string $bizUid
     *
     * @return $this
     */
    public function withBizUid($bizUid)
    {
        $this->data['BizUid'] = $bizUid;
        $this->options['query']['BizUid'] = $bizUid;

        return $this;
    }

    /**
     * @param string $outTradeId
     *
     * @return $this
     */
    public function withOutTradeId($outTradeId)
    {
        $this->data['OutTradeId'] = $outTradeId;
        $this->options['query']['OutTradeId'] = $outTradeId;

        return $this;
    }

    /**
     * @param string $itemId
     *
     * @return $this
     */
    public function withItemId($itemId)
    {
        $this->data['ItemId'] = $itemId;
        $this->options['query']['ItemId'] = $itemId;

        return $this;
    }

    /**
     * @param string $quantity
     *
     * @return $this
     */
    public function withQuantity($quantity)
    {
        $this->data['Quantity'] = $quantity;
        $this->options['query']['Quantity'] = $quantity;

        return $this;
    }

    /**
     * @param string $totalAmount
     *
     * @return $this
     */
    public function withTotalAmount($totalAmount)
    {
        $this->data['TotalAmount'] = $totalAmount;
        $this->options['query']['TotalAmount'] = $totalAmount;

        return $this;
    }

    /**
     * @param string $extJson
     *
     * @return $this
     */
    public function withExtJson($extJson)
    {
        $this->data['ExtJson'] = $extJson;
        $this->options['query']['ExtJson'] = $extJson;

        return $this;
    }
}
