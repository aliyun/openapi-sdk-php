<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * Api CreatePhysicalConnectionSetupOrder
 *
 * @method string getAccessPointId()
 * @method string getRedundantPhysicalConnectionId()
 * @method string getResourceOwnerId()
 * @method string getPortType()
 * @method string getAutoPay()
 * @method string getClientToken()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getLineOperator()
 */
class CreatePhysicalConnectionSetupOrder extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';

    /**
     * @param string $accessPointId
     *
     * @return $this
     */
    public function withAccessPointId($accessPointId)
    {
        $this->data['AccessPointId'] = $accessPointId;
        $this->options['query']['AccessPointId'] = $accessPointId;

        return $this;
    }

    /**
     * @param string $redundantPhysicalConnectionId
     *
     * @return $this
     */
    public function withRedundantPhysicalConnectionId($redundantPhysicalConnectionId)
    {
        $this->data['RedundantPhysicalConnectionId'] = $redundantPhysicalConnectionId;
        $this->options['query']['RedundantPhysicalConnectionId'] = $redundantPhysicalConnectionId;

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
     * @param string $portType
     *
     * @return $this
     */
    public function withPortType($portType)
    {
        $this->data['PortType'] = $portType;
        $this->options['query']['PortType'] = $portType;

        return $this;
    }

    /**
     * @param string $autoPay
     *
     * @return $this
     */
    public function withAutoPay($autoPay)
    {
        $this->data['AutoPay'] = $autoPay;
        $this->options['query']['AutoPay'] = $autoPay;

        return $this;
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

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
     * @param string $lineOperator
     *
     * @return $this
     */
    public function withLineOperator($lineOperator)
    {
        $this->data['LineOperator'] = $lineOperator;
        $this->options['query']['LineOperator'] = $lineOperator;

        return $this;
    }
}
