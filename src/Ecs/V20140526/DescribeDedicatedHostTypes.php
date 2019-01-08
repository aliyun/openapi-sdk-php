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
}
