<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyDBInstanceNetworkType
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
class ModifyDBInstanceNetworkType extends RpcRequest
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
    public $action = 'ModifyDBInstanceNetworkType';

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
     * @deprecated deprecated since version 2.0, Use withVSwitchId() instead.
     *
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function setVSwitchId($vSwitchId)
    {
        return $this->withVSwitchId($vSwitchId);
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
     * @deprecated deprecated since version 2.0, Use withPrivateIpAddress() instead.
     *
     * @param string $privateIpAddress
     *
     * @return $this
     */
    public function setPrivateIpAddress($privateIpAddress)
    {
        return $this->withPrivateIpAddress($privateIpAddress);
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
     * @deprecated deprecated since version 2.0, Use withRetainClassic() instead.
     *
     * @param string $retainClassic
     *
     * @return $this
     */
    public function setRetainClassic($retainClassic)
    {
        return $this->withRetainClassic($retainClassic);
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
     * @deprecated deprecated since version 2.0, Use withClassicExpiredDays() instead.
     *
     * @param string $classicExpiredDays
     *
     * @return $this
     */
    public function setClassicExpiredDays($classicExpiredDays)
    {
        return $this->withClassicExpiredDays($classicExpiredDays);
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
     * @deprecated deprecated since version 2.0, Use withVPCId() instead.
     *
     * @param string $vPCId
     *
     * @return $this
     */
    public function setVPCId($vPCId)
    {
        return $this->withVPCId($vPCId);
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
     * @deprecated deprecated since version 2.0, Use withReadWriteSplittingPrivateIpAddress() instead.
     *
     * @param string $readWriteSplittingPrivateIpAddress
     *
     * @return $this
     */
    public function setReadWriteSplittingPrivateIpAddress($readWriteSplittingPrivateIpAddress)
    {
        return $this->withReadWriteSplittingPrivateIpAddress($readWriteSplittingPrivateIpAddress);
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
     * @deprecated deprecated since version 2.0, Use withInstanceNetworkType() instead.
     *
     * @param string $instanceNetworkType
     *
     * @return $this
     */
    public function setInstanceNetworkType($instanceNetworkType)
    {
        return $this->withInstanceNetworkType($instanceNetworkType);
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
     * @deprecated deprecated since version 2.0, Use withReadWriteSplittingClassicExpiredDays() instead.
     *
     * @param string $readWriteSplittingClassicExpiredDays
     *
     * @return $this
     */
    public function setReadWriteSplittingClassicExpiredDays($readWriteSplittingClassicExpiredDays)
    {
        return $this->withReadWriteSplittingClassicExpiredDays($readWriteSplittingClassicExpiredDays);
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
