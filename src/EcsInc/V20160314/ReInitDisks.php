<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ReInitDisks
 *
 * @method string getResourceOwnerId()
 * @method string getPassword()
 * @method string getResourceOwnerAccount()
 * @method string getAutoStartInstance()
 * @method string getOwnerAccount()
 * @method string getDiskIds()
 * @method string getSecurityEnhancementStrategy()
 * @method string getKeyPairName()
 * @method string getOwnerId()
 */
class ReInitDisks extends RpcRequest
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
    public $action = 'ReInitDisks';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ecs';

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
     * @deprecated deprecated since version 2.0, Use withPassword() instead.
     *
     * @param string $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        return $this->withPassword($password);
    }

    /**
     * @param string $password
     *
     * @return $this
     */
    public function withPassword($password)
    {
        $this->data['Password'] = $password;
        $this->options['query']['Password'] = $password;

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
     * @deprecated deprecated since version 2.0, Use withAutoStartInstance() instead.
     *
     * @param string $autoStartInstance
     *
     * @return $this
     */
    public function setAutoStartInstance($autoStartInstance)
    {
        return $this->withAutoStartInstance($autoStartInstance);
    }

    /**
     * @param string $autoStartInstance
     *
     * @return $this
     */
    public function withAutoStartInstance($autoStartInstance)
    {
        $this->data['AutoStartInstance'] = $autoStartInstance;
        $this->options['query']['AutoStartInstance'] = $autoStartInstance;

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
     * @deprecated deprecated since version 2.0, Use withDiskIds() instead.
     *
     * @param string $diskIds
     *
     * @return $this
     */
    public function setDiskIds($diskIds)
    {
        return $this->withDiskIds($diskIds);
    }

    /**
     * @param string $diskIds
     *
     * @return $this
     */
    public function withDiskIds($diskIds)
    {
        $this->data['DiskIds'] = $diskIds;
        $this->options['query']['DiskIds'] = $diskIds;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSecurityEnhancementStrategy() instead.
     *
     * @param string $securityEnhancementStrategy
     *
     * @return $this
     */
    public function setSecurityEnhancementStrategy($securityEnhancementStrategy)
    {
        return $this->withSecurityEnhancementStrategy($securityEnhancementStrategy);
    }

    /**
     * @param string $securityEnhancementStrategy
     *
     * @return $this
     */
    public function withSecurityEnhancementStrategy($securityEnhancementStrategy)
    {
        $this->data['SecurityEnhancementStrategy'] = $securityEnhancementStrategy;
        $this->options['query']['SecurityEnhancementStrategy'] = $securityEnhancementStrategy;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withKeyPairName() instead.
     *
     * @param string $keyPairName
     *
     * @return $this
     */
    public function setKeyPairName($keyPairName)
    {
        return $this->withKeyPairName($keyPairName);
    }

    /**
     * @param string $keyPairName
     *
     * @return $this
     */
    public function withKeyPairName($keyPairName)
    {
        $this->data['KeyPairName'] = $keyPairName;
        $this->options['query']['KeyPairName'] = $keyPairName;

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
}
