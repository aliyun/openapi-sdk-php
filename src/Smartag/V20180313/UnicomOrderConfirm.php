<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UnicomOrderConfirm
 *
 * @method string getTmsCode()
 * @method string getResourceOwnerId()
 * @method array getOrderItem()
 * @method string getOwnerUserId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOrderPostFee()
 * @method string getOwnerId()
 * @method string getTmsOrderCode()
 * @method string getTradeId()
 */
class UnicomOrderConfirm extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Smartag';

    /**
     * @var string
     */
    public $version = '2018-03-13';

    /**
     * @var string
     */
    public $action = 'UnicomOrderConfirm';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'smartag';

    /**
     * @param string $tmsCode
     *
     * @return $this
     */
    public function withTmsCode($tmsCode)
    {
        $this->data['TmsCode'] = $tmsCode;
        $this->options['query']['TmsCode'] = $tmsCode;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

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

    /**
     * @param string $ownerUserId
     *
     * @return $this
     */
    public function withOwnerUserId($ownerUserId)
    {
        $this->data['OwnerUserId'] = $ownerUserId;
        $this->options['query']['OwnerUserId'] = $ownerUserId;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $orderPostFee
     *
     * @return $this
     */
    public function withOrderPostFee($orderPostFee)
    {
        $this->data['OrderPostFee'] = $orderPostFee;
        $this->options['query']['OrderPostFee'] = $orderPostFee;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $tmsOrderCode
     *
     * @return $this
     */
    public function withTmsOrderCode($tmsOrderCode)
    {
        $this->data['TmsOrderCode'] = $tmsOrderCode;
        $this->options['query']['TmsOrderCode'] = $tmsOrderCode;

        return $this;
    }

    /**
     * @param string $tradeId
     *
     * @return $this
     */
    public function withTradeId($tradeId)
    {
        $this->data['TradeId'] = $tradeId;
        $this->options['query']['TradeId'] = $tradeId;

        return $this;
    }
}
