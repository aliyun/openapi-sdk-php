<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AllocateReadWriteSplittingConnection
 *
 * @method string getResourceOwnerId()
 * @method string getConnectionStringPrefix()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getWeight()
 * @method string getOwnerId()
 * @method string getPort()
 * @method string getDistributionType()
 * @method string getNetType()
 * @method string getDBInstanceId()
 * @method string getMaxDelayTime()
 */
class AllocateReadWriteSplittingConnection extends RpcRequest
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
    public $action = 'AllocateReadWriteSplittingConnection';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'rds';

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
     * @deprecated deprecated since version 2.0, Use withConnectionStringPrefix() instead.
     *
     * @param string $connectionStringPrefix
     *
     * @return $this
     */
    public function setConnectionStringPrefix($connectionStringPrefix)
    {
        return $this->withConnectionStringPrefix($connectionStringPrefix);
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
     * @deprecated deprecated since version 2.0, Use withWeight() instead.
     *
     * @param string $weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        return $this->withWeight($weight);
    }

    /**
     * @param string $weight
     *
     * @return $this
     */
    public function withWeight($weight)
    {
        $this->data['Weight'] = $weight;
        $this->options['query']['Weight'] = $weight;

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
     * @deprecated deprecated since version 2.0, Use withDistributionType() instead.
     *
     * @param string $distributionType
     *
     * @return $this
     */
    public function setDistributionType($distributionType)
    {
        return $this->withDistributionType($distributionType);
    }

    /**
     * @param string $distributionType
     *
     * @return $this
     */
    public function withDistributionType($distributionType)
    {
        $this->data['DistributionType'] = $distributionType;
        $this->options['query']['DistributionType'] = $distributionType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNetType() instead.
     *
     * @param string $netType
     *
     * @return $this
     */
    public function setNetType($netType)
    {
        return $this->withNetType($netType);
    }

    /**
     * @param string $netType
     *
     * @return $this
     */
    public function withNetType($netType)
    {
        $this->data['NetType'] = $netType;
        $this->options['query']['NetType'] = $netType;

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
     * @deprecated deprecated since version 2.0, Use withMaxDelayTime() instead.
     *
     * @param string $maxDelayTime
     *
     * @return $this
     */
    public function setMaxDelayTime($maxDelayTime)
    {
        return $this->withMaxDelayTime($maxDelayTime);
    }

    /**
     * @param string $maxDelayTime
     *
     * @return $this
     */
    public function withMaxDelayTime($maxDelayTime)
    {
        $this->data['MaxDelayTime'] = $maxDelayTime;
        $this->options['query']['MaxDelayTime'] = $maxDelayTime;

        return $this;
    }
}
