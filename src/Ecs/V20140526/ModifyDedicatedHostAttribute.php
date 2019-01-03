<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyDedicatedHostAttribute
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
class ModifyDedicatedHostAttribute extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ecs';

    /**
     * @var string
     */
    public $version = '2014-05-26';

    /**
     * @var string
     */
    public $action = 'ModifyDedicatedHostAttribute';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withDescription() instead.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->withDescription($description);
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
     * @deprecated deprecated since version 2.0, Use withActionOnMaintenance() instead.
     *
     * @param string $actionOnMaintenance
     *
     * @return $this
     */
    public function setActionOnMaintenance($actionOnMaintenance)
    {
        return $this->withActionOnMaintenance($actionOnMaintenance);
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
     * @deprecated deprecated since version 2.0, Use withDedicatedHostName() instead.
     *
     * @param string $dedicatedHostName
     *
     * @return $this
     */
    public function setDedicatedHostName($dedicatedHostName)
    {
        return $this->withDedicatedHostName($dedicatedHostName);
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
     * @deprecated deprecated since version 2.0, Use withDedicatedHostId() instead.
     *
     * @param string $dedicatedHostId
     *
     * @return $this
     */
    public function setDedicatedHostId($dedicatedHostId)
    {
        return $this->withDedicatedHostId($dedicatedHostId);
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
     * @deprecated deprecated since version 2.0, Use withNetworkAttributesSlbUdpTimeout() instead.
     *
     * @param string $networkAttributesSlbUdpTimeout
     *
     * @return $this
     */
    public function setNetworkAttributesSlbUdpTimeout($networkAttributesSlbUdpTimeout)
    {
        return $this->withNetworkAttributesSlbUdpTimeout($networkAttributesSlbUdpTimeout);
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
     * @deprecated deprecated since version 2.0, Use withNetworkAttributesUdpTimeout() instead.
     *
     * @param string $networkAttributesUdpTimeout
     *
     * @return $this
     */
    public function setNetworkAttributesUdpTimeout($networkAttributesUdpTimeout)
    {
        return $this->withNetworkAttributesUdpTimeout($networkAttributesUdpTimeout);
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
