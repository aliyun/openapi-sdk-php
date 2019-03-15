<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Rpc;

/**
 * @method string getTmsCode()
 * @method $this withTmsCode($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getOrderItem()
 * @method string getOwnerUserId()
 * @method $this withOwnerUserId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOrderPostFee()
 * @method $this withOrderPostFee($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTmsOrderCode()
 * @method $this withTmsOrderCode($value)
 * @method string getTradeId()
 * @method $this withTradeId($value)
 */
class UnicomOrderConfirm extends Rpc
{
    public $product = 'Smartag';

    public $version = '2018-03-13';

    public $method = 'POST';

    public $serviceCode = 'smartag';

    /**
     * @param array $orderItem
     *
     * @return $this
     */
    public function withOrderItem(array $orderItem)
    {
        $this->data['OrderItem'] = $orderItem;
        foreach ($orderItem as $i => $iValue) {
            $this->options['query']['OrderItem.' . ($i + 1) . '.ScItemName'] = $orderItem[$i]['ScItemName'];
            $this->options['query']['OrderItem.' . ($i + 1) . '.ItemAmount'] = $orderItem[$i]['ItemAmount'];
            foreach ($orderItem[$i]['SnLists'] as $j => $jValue) {
                $this->options['query']['OrderItem.' . ($i + 1) . '.SnList.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['OrderItem.' . ($i + 1) . '.OrderItemId'] = $orderItem[$i]['OrderItemId'];
            $this->options['query']['OrderItem.' . ($i + 1) . '.ScItemCode'] = $orderItem[$i]['ScItemCode'];
            $this->options['query']['OrderItem.' . ($i + 1) . '.ItemQuantity'] = $orderItem[$i]['ItemQuantity'];
            $this->options['query']['OrderItem.' . ($i + 1) . '.TradeId'] = $orderItem[$i]['TradeId'];
            $this->options['query']['OrderItem.' . ($i + 1) . '.TradeItemId'] = $orderItem[$i]['TradeItemId'];
        }

        return $this;
    }
}
