<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateIpProtection
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getIpProtection()
 */
class UpdateIpProtection extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Dm';

    /**
     * @var string
     */
    public $version = '2015-11-23';

    /**
     * @var string
     */
    public $action = 'UpdateIpProtection';

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
     * @param string $ipProtection
     *
     * @return $this
     */
    public function withIpProtection($ipProtection)
    {
        $this->data['IpProtection'] = $ipProtection;
        $this->options['query']['IpProtection'] = $ipProtection;

        return $this;
    }
}
