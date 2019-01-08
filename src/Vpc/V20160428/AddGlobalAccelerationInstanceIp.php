<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddGlobalAccelerationInstanceIp
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getIpInstanceId()
 * @method string getOwnerId()
 * @method string getGlobalAccelerationInstanceId()
 */
class AddGlobalAccelerationInstanceIp extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Vpc';

    /**
     * @var string
     */
    public $version = '2016-04-28';

    /**
     * @var string
     */
    public $action = 'AddGlobalAccelerationInstanceIp';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vpc';

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
     * @param string $ipInstanceId
     *
     * @return $this
     */
    public function withIpInstanceId($ipInstanceId)
    {
        $this->data['IpInstanceId'] = $ipInstanceId;
        $this->options['query']['IpInstanceId'] = $ipInstanceId;

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
     * @param string $globalAccelerationInstanceId
     *
     * @return $this
     */
    public function withGlobalAccelerationInstanceId($globalAccelerationInstanceId)
    {
        $this->data['GlobalAccelerationInstanceId'] = $globalAccelerationInstanceId;
        $this->options['query']['GlobalAccelerationInstanceId'] = $globalAccelerationInstanceId;

        return $this;
    }
}
