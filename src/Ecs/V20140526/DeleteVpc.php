<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteVpc
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getVpcId()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 */
class DeleteVpc extends RpcRequest
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
    public $action = 'DeleteVpc';

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
     * @param string $vpcId
     *
     * @return $this
     */
    public function withVpcId($vpcId)
    {
        $this->data['VpcId'] = $vpcId;
        $this->options['query']['VpcId'] = $vpcId;

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
