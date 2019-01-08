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
