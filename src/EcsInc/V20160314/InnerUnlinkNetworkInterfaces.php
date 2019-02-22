<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InnerUnlinkNetworkInterfaces
 *
 * @method string getResourceOwnerId()
 * @method array getSrcNetworkInterfaceId()
 * @method string getDestNetworkInterfaceId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 */
class InnerUnlinkNetworkInterfaces extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EcsInc';

    /**
     * @var string
     */
    public $version = '2016-03-14';

    /**
     * @var string
     */
    public $action = 'InnerUnlinkNetworkInterfaces';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
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
     * @param array $srcNetworkInterfaceId
     *
     * @return $this
     */
    public function withSrcNetworkInterfaceId(array $srcNetworkInterfaceId)
    {
        $this->data['SrcNetworkInterfaceId'] = $srcNetworkInterfaceId;
        foreach ($srcNetworkInterfaceId as $i => $iValue) {
            $this->options['query']['SrcNetworkInterfaceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $destNetworkInterfaceId
     *
     * @return $this
     */
    public function withDestNetworkInterfaceId($destNetworkInterfaceId)
    {
        $this->data['DestNetworkInterfaceId'] = $destNetworkInterfaceId;
        $this->options['query']['DestNetworkInterfaceId'] = $destNetworkInterfaceId;

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
