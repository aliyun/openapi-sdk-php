<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyVRouterAttribute
 *
 * @method string getVRouterName()
 * @method string getResourceOwnerId()
 * @method string getVRouterId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getDescription()
 * @method string getOwnerId()
 */
class ModifyVRouterAttribute extends RpcRequest
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
    public $action = 'ModifyVRouterAttribute';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vpc';

    /**
     * @param string $vRouterName
     *
     * @return $this
     */
    public function withVRouterName($vRouterName)
    {
        $this->data['VRouterName'] = $vRouterName;
        $this->options['query']['VRouterName'] = $vRouterName;

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
     * @param string $vRouterId
     *
     * @return $this
     */
    public function withVRouterId($vRouterId)
    {
        $this->data['VRouterId'] = $vRouterId;
        $this->options['query']['VRouterId'] = $vRouterId;

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
