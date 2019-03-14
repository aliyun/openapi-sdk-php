<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Rpc;

/**
 * Api AllocateReadWriteSplittingConnection
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
class AllocateReadWriteSplittingConnection extends Rpc
{
    public $product = 'Rds';

    public $version = '2014-08-15';

    public $method = 'POST';

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
