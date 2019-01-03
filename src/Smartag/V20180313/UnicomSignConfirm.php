<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UnicomSignConfirm
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method array getTmsOrder()
 * @method string getOwnerId()
 */
class UnicomSignConfirm extends RpcRequest
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
    public $action = 'UnicomSignConfirm';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'smartag';

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
     * @deprecated deprecated since version 2.0, Use getTmsOrder() instead.
     *
     * @return array
     */
    public function getTmsOrders()
    {
        return $this->getTmsOrder();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTmsOrder() instead.
     *
     * @param array $tmsOrders
     *
     * @return $this
     */
    public function setTmsOrders(array $tmsOrders)
    {
        return $this->withTmsOrder($tmsOrders);
    }

    /**
     * @param array $tmsOrder
     *
     * @return $this
     */
    public function withTmsOrder(array $tmsOrder)
    {
        $this->data['TmsOrder'] = $tmsOrder;
        foreach ($tmsOrder as $i => $iValue) {
            $this->options['query']['TmsOrder.' . ($i + 1) . '.TmsCode'] = $tmsOrder[$i]['TmsCode'];
            $this->options['query']['TmsOrder.' . ($i + 1) . '.SigningTime'] = $tmsOrder[$i]['SigningTime'];
            $this->options['query']['TmsOrder.' . ($i + 1) . '.TmsOrderCode'] = $tmsOrder[$i]['TmsOrderCode'];
            $this->options['query']['TmsOrder.' . ($i + 1) . '.TradeId'] = $tmsOrder[$i]['TradeId'];
        }

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
}
