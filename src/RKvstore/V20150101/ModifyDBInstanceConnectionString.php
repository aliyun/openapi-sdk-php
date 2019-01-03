<?php

namespace AlibabaCloud\RKvstore\V20150101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyDBInstanceConnectionString
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getNewConnectionString()
 * @method string getOwnerId()
 * @method string getIPType()
 * @method string getCurrentConnectionString()
 * @method string getSecurityToken()
 * @method string getPort()
 * @method string getDBInstanceId()
 */
class ModifyDBInstanceConnectionString extends RpcRequest
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
    public $action = 'ModifyDBInstanceConnectionString';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'redisa';

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
     * @deprecated deprecated since version 2.0, Use withNewConnectionString() instead.
     *
     * @param string $newConnectionString
     *
     * @return $this
     */
    public function setNewConnectionString($newConnectionString)
    {
        return $this->withNewConnectionString($newConnectionString);
    }

    /**
     * @param string $newConnectionString
     *
     * @return $this
     */
    public function withNewConnectionString($newConnectionString)
    {
        $this->data['NewConnectionString'] = $newConnectionString;
        $this->options['query']['NewConnectionString'] = $newConnectionString;

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
     * @deprecated deprecated since version 2.0, Use withIPType() instead.
     *
     * @param string $iPType
     *
     * @return $this
     */
    public function setIPType($iPType)
    {
        return $this->withIPType($iPType);
    }

    /**
     * @param string $iPType
     *
     * @return $this
     */
    public function withIPType($iPType)
    {
        $this->data['IPType'] = $iPType;
        $this->options['query']['IPType'] = $iPType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCurrentConnectionString() instead.
     *
     * @param string $currentConnectionString
     *
     * @return $this
     */
    public function setCurrentConnectionString($currentConnectionString)
    {
        return $this->withCurrentConnectionString($currentConnectionString);
    }

    /**
     * @param string $currentConnectionString
     *
     * @return $this
     */
    public function withCurrentConnectionString($currentConnectionString)
    {
        $this->data['CurrentConnectionString'] = $currentConnectionString;
        $this->options['query']['CurrentConnectionString'] = $currentConnectionString;

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
     * @deprecated deprecated since version 2.0, Use withPort() instead.
     *
     * @param string $port
     *
     * @return $this
     */
    public function setPort($port)
    {
        return $this->withPort($port);
    }

    /**
     * @param string $port
     *
     * @return $this
     */
    public function withPort($port)
    {
        $this->data['Port'] = $port;
        $this->options['query']['Port'] = $port;

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
