<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeDedicatedHostTypes
 *
 * @method string getResourceOwnerId()
 * @method string getSupportedInstanceTypeFamily()
 * @method string getDedicatedHostType()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 */
class DescribeDedicatedHostTypes extends RpcRequest
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
    public $action = 'DescribeDedicatedHostTypes';

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
     * @deprecated deprecated since version 2.0, Use withSupportedInstanceTypeFamily() instead.
     *
     * @param string $supportedInstanceTypeFamily
     *
     * @return $this
     */
    public function setSupportedInstanceTypeFamily($supportedInstanceTypeFamily)
    {
        return $this->withSupportedInstanceTypeFamily($supportedInstanceTypeFamily);
    }

    /**
     * @param string $supportedInstanceTypeFamily
     *
     * @return $this
     */
    public function withSupportedInstanceTypeFamily($supportedInstanceTypeFamily)
    {
        $this->data['SupportedInstanceTypeFamily'] = $supportedInstanceTypeFamily;
        $this->options['query']['SupportedInstanceTypeFamily'] = $supportedInstanceTypeFamily;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDedicatedHostType() instead.
     *
     * @param string $dedicatedHostType
     *
     * @return $this
     */
    public function setDedicatedHostType($dedicatedHostType)
    {
        return $this->withDedicatedHostType($dedicatedHostType);
    }

    /**
     * @param string $dedicatedHostType
     *
     * @return $this
     */
    public function withDedicatedHostType($dedicatedHostType)
    {
        $this->data['DedicatedHostType'] = $dedicatedHostType;
        $this->options['query']['DedicatedHostType'] = $dedicatedHostType;

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
