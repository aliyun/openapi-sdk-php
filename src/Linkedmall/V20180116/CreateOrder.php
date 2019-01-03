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
     * @deprecated deprecated since version 2.0, Use withBizUid() instead.
     *
     * @param string $bizUid
     *
     * @return $this
     */
    public function setBizUid($bizUid)
    {
        return $this->withBizUid($bizUid);
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
     * @deprecated deprecated since version 2.0, Use withOutTradeId() instead.
     *
     * @param string $outTradeId
     *
     * @return $this
     */
    public function setOutTradeId($outTradeId)
    {
        return $this->withOutTradeId($outTradeId);
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
     * @deprecated deprecated since version 2.0, Use withItemId() instead.
     *
     * @param string $itemId
     *
     * @return $this
     */
    public function setItemId($itemId)
    {
        return $this->withItemId($itemId);
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
     * @deprecated deprecated since version 2.0, Use withQuantity() instead.
     *
     * @param string $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        return $this->withQuantity($quantity);
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
     * @deprecated deprecated since version 2.0, Use withTotalAmount() instead.
     *
     * @param string $totalAmount
     *
     * @return $this
     */
    public function setTotalAmount($totalAmount)
    {
        return $this->withTotalAmount($totalAmount);
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
     * @deprecated deprecated since version 2.0, Use withExtJson() instead.
     *
     * @param string $extJson
     *
     * @return $this
     */
    public function setExtJson($extJson)
    {
        return $this->withExtJson($extJson);
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
