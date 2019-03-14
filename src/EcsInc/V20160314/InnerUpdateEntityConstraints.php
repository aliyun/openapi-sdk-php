<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * Api InnerUpdateEntityConstraints
 *
 * @method string getEntityKey()
 * @method string getResourceOwnerId()
 * @method string getEntityProperties()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getReplaceAll()
 * @method string getEntityType()
 */
class InnerUpdateEntityConstraints extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

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
     * @param string $replaceAll
     *
     * @return $this
     */
    public function withReplaceAll($replaceAll)
    {
        $this->data['ReplaceAll'] = $replaceAll;
        $this->options['query']['ReplaceAll'] = $replaceAll;

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
