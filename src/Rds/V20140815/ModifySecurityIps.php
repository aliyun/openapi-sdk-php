<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifySecurityIps
 *
 * @method string getDBInstanceIPArrayName()
 * @method string getResourceOwnerId()
 * @method string getModifyMode()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getOwnerAccount()
 * @method string getSecurityIps()
 * @method string getSecurityGroupId()
 * @method string getOwnerId()
 * @method string getWhitelistNetworkType()
 * @method string getDBInstanceIPArrayAttribute()
 * @method string getSecurityIPType()
 * @method string getDBInstanceId()
 */
class ModifySecurityIps extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Rds';

    /**
     * @var string
     */
    public $version = '2014-08-15';

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
    public $serviceCode = 'rds';

    /**
     * @deprecated deprecated since version 2.0, Use withDBInstanceIPArrayName() instead.
     *
     * @param string $dBInstanceIPArrayName
     *
     * @return $this
     */
    public function setDBInstanceIPArrayName($dBInstanceIPArrayName)
    {
        return $this->withDBInstanceIPArrayName($dBInstanceIPArrayName);
    }

    /**
     * @param string $dBInstanceIPArrayName
     *
     * @return $this
     */
    public function withDBInstanceIPArrayName($dBInstanceIPArrayName)
    {
        $this->data['DBInstanceIPArrayName'] = $dBInstanceIPArrayName;
        $this->options['query']['DBInstanceIPArrayName'] = $dBInstanceIPArrayName;

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
     * @deprecated deprecated since version 2.0, Use withClientToken() instead.
     *
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        return $this->withClientToken($clientToken);
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

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
     * @deprecated deprecated since version 2.0, Use withSecurityGroupId() instead.
     *
     * @param string $securityGroupId
     *
     * @return $this
     */
    public function setSecurityGroupId($securityGroupId)
    {
        return $this->withSecurityGroupId($securityGroupId);
    }

    /**
     * @param string $securityGroupId
     *
     * @return $this
     */
    public function withSecurityGroupId($securityGroupId)
    {
        $this->data['SecurityGroupId'] = $securityGroupId;
        $this->options['query']['SecurityGroupId'] = $securityGroupId;

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
     * @deprecated deprecated since version 2.0, Use withWhitelistNetworkType() instead.
     *
     * @param string $whitelistNetworkType
     *
     * @return $this
     */
    public function setWhitelistNetworkType($whitelistNetworkType)
    {
        return $this->withWhitelistNetworkType($whitelistNetworkType);
    }

    /**
     * @param string $whitelistNetworkType
     *
     * @return $this
     */
    public function withWhitelistNetworkType($whitelistNetworkType)
    {
        $this->data['WhitelistNetworkType'] = $whitelistNetworkType;
        $this->options['query']['WhitelistNetworkType'] = $whitelistNetworkType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDBInstanceIPArrayAttribute() instead.
     *
     * @param string $dBInstanceIPArrayAttribute
     *
     * @return $this
     */
    public function setDBInstanceIPArrayAttribute($dBInstanceIPArrayAttribute)
    {
        return $this->withDBInstanceIPArrayAttribute($dBInstanceIPArrayAttribute);
    }

    /**
     * @param string $dBInstanceIPArrayAttribute
     *
     * @return $this
     */
    public function withDBInstanceIPArrayAttribute($dBInstanceIPArrayAttribute)
    {
        $this->data['DBInstanceIPArrayAttribute'] = $dBInstanceIPArrayAttribute;
        $this->options['query']['DBInstanceIPArrayAttribute'] = $dBInstanceIPArrayAttribute;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSecurityIPType() instead.
     *
     * @param string $securityIPType
     *
     * @return $this
     */
    public function setSecurityIPType($securityIPType)
    {
        return $this->withSecurityIPType($securityIPType);
    }

    /**
     * @param string $securityIPType
     *
     * @return $this
     */
    public function withSecurityIPType($securityIPType)
    {
        $this->data['SecurityIPType'] = $securityIPType;
        $this->options['query']['SecurityIPType'] = $securityIPType;

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
}
