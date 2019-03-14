<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * Api ModifyDedicatedHostAttribute
 *
 * @method string getResourceOwnerId()
 * @method string getDescription()
 * @method string getActionOnMaintenance()
 * @method string getDedicatedHostName()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getDedicatedHostId()
 * @method string getOwnerId()
 * @method string getNetworkAttributesSlbUdpTimeout()
 * @method string getNetworkAttributesUdpTimeout()
 */
class ModifyDedicatedHostAttribute extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

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
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

        return $this;
    }

    /**
     * @param string $actionOnMaintenance
     *
     * @return $this
     */
    public function withActionOnMaintenance($actionOnMaintenance)
    {
        $this->data['ActionOnMaintenance'] = $actionOnMaintenance;
        $this->options['query']['ActionOnMaintenance'] = $actionOnMaintenance;

        return $this;
    }

    /**
     * @param string $dedicatedHostName
     *
     * @return $this
     */
    public function withDedicatedHostName($dedicatedHostName)
    {
        $this->data['DedicatedHostName'] = $dedicatedHostName;
        $this->options['query']['DedicatedHostName'] = $dedicatedHostName;

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
     * @param string $dedicatedHostId
     *
     * @return $this
     */
    public function withDedicatedHostId($dedicatedHostId)
    {
        $this->data['DedicatedHostId'] = $dedicatedHostId;
        $this->options['query']['DedicatedHostId'] = $dedicatedHostId;

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
     * @param string $networkAttributesSlbUdpTimeout
     *
     * @return $this
     */
    public function withNetworkAttributesSlbUdpTimeout($networkAttributesSlbUdpTimeout)
    {
        $this->data['NetworkAttributesSlbUdpTimeout'] = $networkAttributesSlbUdpTimeout;
        $this->options['query']['NetworkAttributes.SlbUdpTimeout'] = $networkAttributesSlbUdpTimeout;

        return $this;
    }

    /**
     * @param string $networkAttributesUdpTimeout
     *
     * @return $this
     */
    public function withNetworkAttributesUdpTimeout($networkAttributesUdpTimeout)
    {
        $this->data['NetworkAttributesUdpTimeout'] = $networkAttributesUdpTimeout;
        $this->options['query']['NetworkAttributes.UdpTimeout'] = $networkAttributesUdpTimeout;

        return $this;
    }
}
