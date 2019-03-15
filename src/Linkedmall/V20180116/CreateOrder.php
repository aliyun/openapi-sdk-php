<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Rpc;

/**
 * @method string getItemId()
 * @method $this withItemId($value)
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getTotalAmount()
 * @method $this withTotalAmount($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getExtJson()
 * @method $this withExtJson($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getOutTradeId()
 * @method $this withOutTradeId($value)
 * @method string getOrderExpireTime()
 * @method $this withOrderExpireTime($value)
 * @method array getItemList()
 * @method string getDeliveryAddress()
 * @method $this withDeliveryAddress($value)
 */
class CreateOrder extends Rpc
{
    public $product = 'linkedmall';

    public $version = '2018-01-16';

    public $method = 'POST';

    public $serviceCode = 'linkedmall';

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
}
