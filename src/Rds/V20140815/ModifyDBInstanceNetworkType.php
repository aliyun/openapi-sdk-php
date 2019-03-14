<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Rpc;

/**
 * Api ModifyDBInstanceNetworkType
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getVSwitchId()
 * @method string getPrivateIpAddress()
 * @method string getRetainClassic()
 * @method string getClassicExpiredDays()
 * @method string getVPCId()
 * @method string getDBInstanceId()
 * @method string getReadWriteSplittingPrivateIpAddress()
 * @method string getInstanceNetworkType()
 * @method string getReadWriteSplittingClassicExpiredDays()
 */
class ModifyDBInstanceNetworkType extends Rpc
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
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function withVSwitchId($vSwitchId)
    {
        $this->data['VSwitchId'] = $vSwitchId;
        $this->options['query']['VSwitchId'] = $vSwitchId;

        return $this;
    }

    /**
     * @param string $privateIpAddress
     *
     * @return $this
     */
    public function withPrivateIpAddress($privateIpAddress)
    {
        $this->data['PrivateIpAddress'] = $privateIpAddress;
        $this->options['query']['PrivateIpAddress'] = $privateIpAddress;

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
     * @param string $vPCId
     *
     * @return $this
     */
    public function withVPCId($vPCId)
    {
        $this->data['VPCId'] = $vPCId;
        $this->options['query']['VPCId'] = $vPCId;

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
     * @param string $readWriteSplittingPrivateIpAddress
     *
     * @return $this
     */
    public function withReadWriteSplittingPrivateIpAddress($readWriteSplittingPrivateIpAddress)
    {
        $this->data['ReadWriteSplittingPrivateIpAddress'] = $readWriteSplittingPrivateIpAddress;
        $this->options['query']['ReadWriteSplittingPrivateIpAddress'] = $readWriteSplittingPrivateIpAddress;

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

    /**
     * @param string $readWriteSplittingClassicExpiredDays
     *
     * @return $this
     */
    public function withReadWriteSplittingClassicExpiredDays($readWriteSplittingClassicExpiredDays)
    {
        $this->data['ReadWriteSplittingClassicExpiredDays'] = $readWriteSplittingClassicExpiredDays;
        $this->options['query']['ReadWriteSplittingClassicExpiredDays'] = $readWriteSplittingClassicExpiredDays;

        return $this;
    }
}
