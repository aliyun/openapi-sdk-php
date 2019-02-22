<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InnerLinkNetworkInterfaces
 *
 * @method string getResourceOwnerId()
 * @method string getDestNetworkInterfaceId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method array getSrcNetworkInterface()
 */
class InnerLinkNetworkInterfaces extends RpcRequest
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
    public $action = 'InnerLinkNetworkInterfaces';

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

    /**
     * @param array $srcNetworkInterface
     *
     * @return $this
     */
    public function withSrcNetworkInterface(array $srcNetworkInterface)
    {
        $this->data['SrcNetworkInterface'] = $srcNetworkInterface;
        foreach ($srcNetworkInterface as $i => $iValue) {
            $this->options['query']['SrcNetworkInterface.' . ($i + 1) . '.VlanId'] = $srcNetworkInterface[$i]['VlanId'];
            $this->options['query']['SrcNetworkInterface.' . ($i + 1) . '.NetworkInterfaceId'] = $srcNetworkInterface[$i]['NetworkInterfaceId'];
        }

        return $this;
    }
}
