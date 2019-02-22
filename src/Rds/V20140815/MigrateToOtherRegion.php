<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of MigrateToOtherRegion
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getTargetVSwitchId()
 * @method string getOwnerId()
 * @method string getTargetVpcId()
 * @method string getTargetZoneId()
 * @method string getEffectiveTime()
 * @method string getDBInstanceId()
 * @method string getTargetRegionId()
 * @method string getSwitchTime()
 */
class MigrateToOtherRegion extends RpcRequest
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
    public $action = 'MigrateToOtherRegion';

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
     * @param string $targetVSwitchId
     *
     * @return $this
     */
    public function withTargetVSwitchId($targetVSwitchId)
    {
        $this->data['TargetVSwitchId'] = $targetVSwitchId;
        $this->options['query']['TargetVSwitchId'] = $targetVSwitchId;

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
     * @param string $targetVpcId
     *
     * @return $this
     */
    public function withTargetVpcId($targetVpcId)
    {
        $this->data['TargetVpcId'] = $targetVpcId;
        $this->options['query']['TargetVpcId'] = $targetVpcId;

        return $this;
    }

    /**
     * @param string $targetZoneId
     *
     * @return $this
     */
    public function withTargetZoneId($targetZoneId)
    {
        $this->data['TargetZoneId'] = $targetZoneId;
        $this->options['query']['TargetZoneId'] = $targetZoneId;

        return $this;
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
     * @param string $targetRegionId
     *
     * @return $this
     */
    public function withTargetRegionId($targetRegionId)
    {
        $this->data['TargetRegionId'] = $targetRegionId;
        $this->options['query']['TargetRegionId'] = $targetRegionId;

        return $this;
    }

    /**
     * @param string $switchTime
     *
     * @return $this
     */
    public function withSwitchTime($switchTime)
    {
        $this->data['SwitchTime'] = $switchTime;
        $this->options['query']['SwitchTime'] = $switchTime;

        return $this;
    }
}
