<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of MigrateToOtherZone
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getZoneIdSlave2()
 * @method string getOwnerId()
 * @method string getVSwitchId()
 * @method string getEffectiveTime()
 * @method string getVPCId()
 * @method string getZoneId()
 * @method string getDBInstanceId()
 * @method string getCategory()
 * @method string getZoneIdSlave1 ()
 */
class MigrateToOtherZone extends RpcRequest
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
    public $action = 'MigrateToOtherZone';

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
     * @deprecated deprecated since version 2.0, Use withZoneIdSlave2() instead.
     *
     * @param string $zoneIdSlave2
     *
     * @return $this
     */
    public function setZoneIdSlave2($zoneIdSlave2)
    {
        return $this->withZoneIdSlave2($zoneIdSlave2);
    }

    /**
     * @param string $zoneIdSlave2
     *
     * @return $this
     */
    public function withZoneIdSlave2($zoneIdSlave2)
    {
        $this->data['ZoneIdSlave2'] = $zoneIdSlave2;
        $this->options['query']['ZoneIdSlave2'] = $zoneIdSlave2;

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
     * @deprecated deprecated since version 2.0, Use withEffectiveTime() instead.
     *
     * @param string $effectiveTime
     *
     * @return $this
     */
    public function setEffectiveTime($effectiveTime)
    {
        return $this->withEffectiveTime($effectiveTime);
    }

    /**
     * @param string $effectiveTime
     *
     * @return $this
     */
    public function withEffectiveTime($effectiveTime)
    {
        $this->data['EffectiveTime'] = $effectiveTime;
        $this->options['query']['EffectiveTime'] = $effectiveTime;

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
     * @deprecated deprecated since version 2.0, Use withZoneId() instead.
     *
     * @param string $zoneId
     *
     * @return $this
     */
    public function setZoneId($zoneId)
    {
        return $this->withZoneId($zoneId);
    }

    /**
     * @param string $zoneId
     *
     * @return $this
     */
    public function withZoneId($zoneId)
    {
        $this->data['ZoneId'] = $zoneId;
        $this->options['query']['ZoneId'] = $zoneId;

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
     * @deprecated deprecated since version 2.0, Use withCategory() instead.
     *
     * @param string $category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        return $this->withCategory($category);
    }

    /**
     * @param string $category
     *
     * @return $this
     */
    public function withCategory($category)
    {
        $this->data['Category'] = $category;
        $this->options['query']['Category'] = $category;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withZoneIdSlave1 () instead.
     *
     * @param string $zoneIdSlave1
     *
     * @return $this
     */
    public function setZoneIdSlave1($zoneIdSlave1)
    {
        return $this->withZoneIdSlave1($zoneIdSlave1);
    }

    /**
     * @param string $zoneIdSlave1
     *
     * @return $this
     */
    public function withZoneIdSlave1($zoneIdSlave1)
    {
        $this->data['ZoneIdSlave1 '] = $zoneIdSlave1 ;
        $this->options['query']['ZoneIdSlave1 '] = $zoneIdSlave1 ;

        return $this;
    }
}
