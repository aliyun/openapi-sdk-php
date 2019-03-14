<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Rpc;

/**
 * Api CreateOrder
 *
 * @method string getItemId()
 * @method string getQuantity()
 * @method string getTotalAmount()
 * @method string getBizUid()
 * @method string getExtJson()
 * @method string getBizId()
 * @method string getOutTradeId()
 * @method string getOrderExpireTime()
 * @method array getItemList()
 * @method string getDeliveryAddress()
 */
class CreateOrder extends Rpc
{
    public $product = 'linkedmall';

    public $version = '2018-01-16';

    public $method = 'POST';

    public $serviceCode = 'linkedmall';

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
     * @param string $orderExpireTime
     *
     * @return $this
     */
    public function withOrderExpireTime($orderExpireTime)
    {
        $this->data['OrderExpireTime'] = $orderExpireTime;
        $this->options['query']['OrderExpireTime'] = $orderExpireTime;

        return $this;
    }

    /**
     * @param array $itemList
     *
     * @return $this
     */
    public function withItemList(array $itemList)
    {
        $this->data['ItemList'] = $itemList;
        foreach ($itemList as $i => $iValue) {
            $this->options['query']['ItemList.' . ($i + 1) . '.ItemId'] = $itemList[$i]['ItemId'];
            $this->options['query']['ItemList.' . ($i + 1) . '.Quantity'] = $itemList[$i]['Quantity'];
            $this->options['query']['ItemList.' . ($i + 1) . '.SkuId'] = $itemList[$i]['SkuId'];
        }

        return $this;
    }

    /**
     * @param string $deliveryAddress
     *
     * @return $this
     */
    public function withDeliveryAddress($deliveryAddress)
    {
        $this->data['DeliveryAddress'] = $deliveryAddress;
        $this->options['query']['DeliveryAddress'] = $deliveryAddress;

        return $this;
    }
}
