<?php

namespace AlibabaCloud\Dds\V20151201;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifySecurityIps
 *
 * @method string getResourceOwnerId()
 * @method string getModifyMode()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getSecurityIps()
 * @method string getOwnerId()
 * @method string getSecurityIpGroupName()
 * @method string getSecurityToken()
 * @method string getDBInstanceId()
 * @method string getSecurityIpGroupAttribute()
 */
class ModifySecurityIps extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Dds';

    /**
     * @var string
     */
    public $version = '2015-12-01';

    /**
     * @var string
     */
    public $action = 'ModifySecurityIps';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'dds';

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
     * @param string $modifyMode
     *
     * @return $this
     */
    public function withModifyMode($modifyMode)
    {
        $this->data['ModifyMode'] = $modifyMode;
        $this->options['query']['ModifyMode'] = $modifyMode;

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
     * @param string $securityIps
     *
     * @return $this
     */
    public function withSecurityIps($securityIps)
    {
        $this->data['SecurityIps'] = $securityIps;
        $this->options['query']['SecurityIps'] = $securityIps;

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
     * @param string $securityIpGroupName
     *
     * @return $this
     */
    public function withSecurityIpGroupName($securityIpGroupName)
    {
        $this->data['SecurityIpGroupName'] = $securityIpGroupName;
        $this->options['query']['SecurityIpGroupName'] = $securityIpGroupName;

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
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function withDBInstanceId($dBInstanceId)
    {
        $this->data['DBInstanceId'] = $dBInstanceId;
        $this->options['query']['DBInstanceId'] = $dBInstanceId;

        return $this;
    }

    /**
     * @param string $securityIpGroupAttribute
     *
     * @return $this
     */
    public function withSecurityIpGroupAttribute($securityIpGroupAttribute)
    {
        $this->data['SecurityIpGroupAttribute'] = $securityIpGroupAttribute;
        $this->options['query']['SecurityIpGroupAttribute'] = $securityIpGroupAttribute;

        return $this;
    }
}
