<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Rpc;

/**
 * Api UnicomSignConfirm
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method array getTmsOrder()
 * @method string getOwnerId()
 */
class UnicomSignConfirm extends Rpc
{
    public $product = 'Smartag';

    public $version = '2018-03-13';

    public $method = 'POST';

    public $serviceCode = 'smartag';

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
