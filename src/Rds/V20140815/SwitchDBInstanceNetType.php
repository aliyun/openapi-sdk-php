<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SwitchDBInstanceNetType
 *
 * @method string getResourceOwnerId()
 * @method string getConnectionStringPrefix()
 * @method string getConnectionStringType()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getPort()
 * @method string getOwnerAccount()
 * @method string getDBInstanceId()
 * @method string getOwnerId()
 */
class SwitchDBInstanceNetType extends RpcRequest
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
    public $action = 'SwitchDBInstanceNetType';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'rds';

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
     * @param string $connectionStringPrefix
     *
     * @return $this
     */
    public function withConnectionStringPrefix($connectionStringPrefix)
    {
        $this->data['ConnectionStringPrefix'] = $connectionStringPrefix;
        $this->options['query']['ConnectionStringPrefix'] = $connectionStringPrefix;

        return $this;
    }

    /**
     * @param string $connectionStringType
     *
     * @return $this
     */
    public function withConnectionStringType($connectionStringType)
    {
        $this->data['ConnectionStringType'] = $connectionStringType;
        $this->options['query']['ConnectionStringType'] = $connectionStringType;

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
