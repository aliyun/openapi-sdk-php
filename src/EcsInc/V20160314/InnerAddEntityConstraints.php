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
     * @deprecated deprecated since version 2.0, Use withEntityKey() instead.
     *
     * @param string $entityKey
     *
     * @return $this
     */
    public function setEntityKey($entityKey)
    {
        return $this->withEntityKey($entityKey);
    }

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
     * @deprecated deprecated since version 2.0, Use withEntityProperties() instead.
     *
     * @param string $entityProperties
     *
     * @return $this
     */
    public function setEntityProperties($entityProperties)
    {
        return $this->withEntityProperties($entityProperties);
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

    /**
     * @deprecated deprecated since version 2.0, Use withEntityType() instead.
     *
     * @param string $entityType
     *
     * @return $this
     */
    public function setEntityType($entityType)
    {
        return $this->withEntityType($entityType);
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
