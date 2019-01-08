<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InnerAddEntityConstraints
 *
 * @method string getEntityKey()
 * @method string getResourceOwnerId()
 * @method string getEntityProperties()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getEntityType()
 */
class InnerAddEntityConstraints extends RpcRequest
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
    public $action = 'InnerAddEntityConstraints';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ecs';

    /**
     * @param string $entityKey
     *
     * @return $this
     */
    public function withEntityKey($entityKey)
    {
        $this->data['EntityKey'] = $entityKey;
        $this->options['query']['EntityKey'] = $entityKey;

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
     * @param string $entityProperties
     *
     * @return $this
     */
    public function withEntityProperties($entityProperties)
    {
        $this->data['EntityProperties'] = $entityProperties;
        $this->options['query']['EntityProperties'] = $entityProperties;

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
     * @param string $entityType
     *
     * @return $this
     */
    public function withEntityType($entityType)
    {
        $this->data['EntityType'] = $entityType;
        $this->options['query']['EntityType'] = $entityType;

        return $this;
    }
}
