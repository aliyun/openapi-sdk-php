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
     * @deprecated deprecated since version 2.0, Use withTmsCode() instead.
     *
     * @param string $tmsCode
     *
     * @return $this
     */
    public function setTmsCode($tmsCode)
    {
        return $this->withTmsCode($tmsCode);
    }

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
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
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
     * @deprecated deprecated since version 2.0, Use getOrderItem() instead.
     *
     * @return array
     */
    public function getOrderItems()
    {
        return $this->getOrderItem();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOrderItem() instead.
     *
     * @param array $orderItems
     *
     * @return $this
     */
    public function setOrderItems(array $orderItems)
    {
        return $this->withOrderItem($orderItems);
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
     * @deprecated deprecated since version 2.0, Use withOwnerUserId() instead.
     *
     * @param string $ownerUserId
     *
     * @return $this
     */
    public function setOwnerUserId($ownerUserId)
    {
        return $this->withOwnerUserId($ownerUserId);
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
     * @deprecated deprecated since version 2.0, Use withResourceOwnerAccount() instead.
     *
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        return $this->withResourceOwnerAccount($resourceOwnerAccount);
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
     * @deprecated deprecated since version 2.0, Use withOwnerAccount() instead.
     *
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        return $this->withOwnerAccount($ownerAccount);
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
     * @deprecated deprecated since version 2.0, Use withOrderPostFee() instead.
     *
     * @param string $orderPostFee
     *
     * @return $this
     */
    public function setOrderPostFee($orderPostFee)
    {
        return $this->withOrderPostFee($orderPostFee);
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
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
     * @deprecated deprecated since version 2.0, Use withTmsOrderCode() instead.
     *
     * @param string $tmsOrderCode
     *
     * @return $this
     */
    public function setTmsOrderCode($tmsOrderCode)
    {
        return $this->withTmsOrderCode($tmsOrderCode);
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
     * @deprecated deprecated since version 2.0, Use withTradeId() instead.
     *
     * @param string $tradeId
     *
     * @return $this
     */
    public function setTradeId($tradeId)
    {
        return $this->withTradeId($tradeId);
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
