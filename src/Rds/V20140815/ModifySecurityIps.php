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
