<?php

namespace AlibabaCloud\RKvstore\V20150101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyInstanceSpecPreCheck
 *
 * @method string getResourceOwnerId()
 * @method string getInstanceId()
 * @method string getSecurityToken()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getTargetInstanceClass()
 */
class ModifyInstanceSpecPreCheck extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'R-kvstore';

    /**
     * @var string
     */
    public $version = '2015-01-01';

    /**
     * @var string
     */
    public $action = 'ModifyInstanceSpecPreCheck';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'redisa';

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
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken'] = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

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
     * @param string $targetInstanceClass
     *
     * @return $this
     */
    public function withTargetInstanceClass($targetInstanceClass)
    {
        $this->data['TargetInstanceClass'] = $targetInstanceClass;
        $this->options['query']['TargetInstanceClass'] = $targetInstanceClass;

        return $this;
    }
}
