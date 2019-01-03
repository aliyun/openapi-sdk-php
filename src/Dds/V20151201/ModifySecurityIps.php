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
     * @deprecated deprecated since version 2.0, Use withModifyMode() instead.
     *
     * @param string $modifyMode
     *
     * @return $this
     */
    public function setModifyMode($modifyMode)
    {
        return $this->withModifyMode($modifyMode);
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
     * @deprecated deprecated since version 2.0, Use withSecurityIps() instead.
     *
     * @param string $securityIps
     *
     * @return $this
     */
    public function setSecurityIps($securityIps)
    {
        return $this->withSecurityIps($securityIps);
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
     * @deprecated deprecated since version 2.0, Use withSecurityIpGroupName() instead.
     *
     * @param string $securityIpGroupName
     *
     * @return $this
     */
    public function setSecurityIpGroupName($securityIpGroupName)
    {
        return $this->withSecurityIpGroupName($securityIpGroupName);
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
     * @deprecated deprecated since version 2.0, Use withSecurityToken() instead.
     *
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        return $this->withSecurityToken($securityToken);
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
     * @deprecated deprecated since version 2.0, Use withDBInstanceId() instead.
     *
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function setDBInstanceId($dBInstanceId)
    {
        return $this->withDBInstanceId($dBInstanceId);
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
     * @deprecated deprecated since version 2.0, Use withSecurityIpGroupAttribute() instead.
     *
     * @param string $securityIpGroupAttribute
     *
     * @return $this
     */
    public function setSecurityIpGroupAttribute($securityIpGroupAttribute)
    {
        return $this->withSecurityIpGroupAttribute($securityIpGroupAttribute);
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
