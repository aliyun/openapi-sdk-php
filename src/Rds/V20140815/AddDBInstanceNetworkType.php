<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddDBInstanceNetworkType
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getRetainClassic()
 * @method string getClassicExpiredDays()
 * @method string getDBInstanceId()
 * @method string getOwnerId()
 * @method string getInstanceNetworkType()
 */
class AddDBInstanceNetworkType extends RpcRequest
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
    public $action = 'AddDBInstanceNetworkType';

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
     * @param string $retainClassic
     *
     * @return $this
     */
    public function withRetainClassic($retainClassic)
    {
        $this->data['RetainClassic'] = $retainClassic;
        $this->options['query']['RetainClassic'] = $retainClassic;

        return $this;
    }

    /**
     * @param string $classicExpiredDays
     *
     * @return $this
     */
    public function withClassicExpiredDays($classicExpiredDays)
    {
        $this->data['ClassicExpiredDays'] = $classicExpiredDays;
        $this->options['query']['ClassicExpiredDays'] = $classicExpiredDays;

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

    /**
     * @param string $instanceNetworkType
     *
     * @return $this
     */
    public function withInstanceNetworkType($instanceNetworkType)
    {
        $this->data['InstanceNetworkType'] = $instanceNetworkType;
        $this->options['query']['InstanceNetworkType'] = $instanceNetworkType;

        return $this;
    }
}
