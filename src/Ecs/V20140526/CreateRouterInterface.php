<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * Api CreateRouterInterface
 *
 * @method string getAccessPointId()
 * @method string getOppositeRouterId()
 * @method string getOppositeAccessPointId()
 * @method string getResourceOwnerId()
 * @method string getRole()
 * @method string getClientToken()
 * @method string getHealthCheckTargetIp()
 * @method string getDescription()
 * @method string getSpec()
 * @method string getUserCidr()
 * @method string getOppositeInterfaceId()
 * @method string getInstanceChargeType()
 * @method string getPeriod()
 * @method string getAutoPay()
 * @method string getResourceOwnerAccount()
 * @method string getOppositeRegionId()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getOppositeInterfaceOwnerId()
 * @method string getRouterType()
 * @method string getHealthCheckSourceIp()
 * @method string getRouterId()
 * @method string getOppositeRouterType()
 * @method string getName()
 * @method string getPricingCycle()
 */
class CreateRouterInterface extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param string $accessPointId
     *
     * @return $this
     */
    public function withAccessPointId($accessPointId)
    {
        $this->data['AccessPointId'] = $accessPointId;
        $this->options['query']['AccessPointId'] = $accessPointId;

        return $this;
    }

    /**
     * @param string $oppositeRouterId
     *
     * @return $this
     */
    public function withOppositeRouterId($oppositeRouterId)
    {
        $this->data['OppositeRouterId'] = $oppositeRouterId;
        $this->options['query']['OppositeRouterId'] = $oppositeRouterId;

        return $this;
    }

    /**
     * @param string $oppositeAccessPointId
     *
     * @return $this
     */
    public function withOppositeAccessPointId($oppositeAccessPointId)
    {
        $this->data['OppositeAccessPointId'] = $oppositeAccessPointId;
        $this->options['query']['OppositeAccessPointId'] = $oppositeAccessPointId;

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
     * @param string $role
     *
     * @return $this
     */
    public function withRole($role)
    {
        $this->data['Role'] = $role;
        $this->options['query']['Role'] = $role;

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
     * @param string $healthCheckTargetIp
     *
     * @return $this
     */
    public function withHealthCheckTargetIp($healthCheckTargetIp)
    {
        $this->data['HealthCheckTargetIp'] = $healthCheckTargetIp;
        $this->options['query']['HealthCheckTargetIp'] = $healthCheckTargetIp;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

        return $this;
    }

    /**
     * @param string $spec
     *
     * @return $this
     */
    public function withSpec($spec)
    {
        $this->data['Spec'] = $spec;
        $this->options['query']['Spec'] = $spec;

        return $this;
    }

    /**
     * @param string $userCidr
     *
     * @return $this
     */
    public function withUserCidr($userCidr)
    {
        $this->data['UserCidr'] = $userCidr;
        $this->options['query']['UserCidr'] = $userCidr;

        return $this;
    }

    /**
     * @param string $oppositeInterfaceId
     *
     * @return $this
     */
    public function withOppositeInterfaceId($oppositeInterfaceId)
    {
        $this->data['OppositeInterfaceId'] = $oppositeInterfaceId;
        $this->options['query']['OppositeInterfaceId'] = $oppositeInterfaceId;

        return $this;
    }

    /**
     * @param string $instanceChargeType
     *
     * @return $this
     */
    public function withInstanceChargeType($instanceChargeType)
    {
        $this->data['InstanceChargeType'] = $instanceChargeType;
        $this->options['query']['InstanceChargeType'] = $instanceChargeType;

        return $this;
    }

    /**
     * @param string $period
     *
     * @return $this
     */
    public function withPeriod($period)
    {
        $this->data['Period'] = $period;
        $this->options['query']['Period'] = $period;

        return $this;
    }

    /**
     * @param string $autoPay
     *
     * @return $this
     */
    public function withAutoPay($autoPay)
    {
        $this->data['AutoPay'] = $autoPay;
        $this->options['query']['AutoPay'] = $autoPay;

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
     * @param string $oppositeRegionId
     *
     * @return $this
     */
    public function withOppositeRegionId($oppositeRegionId)
    {
        $this->data['OppositeRegionId'] = $oppositeRegionId;
        $this->options['query']['OppositeRegionId'] = $oppositeRegionId;

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
     * @param string $oppositeInterfaceOwnerId
     *
     * @return $this
     */
    public function withOppositeInterfaceOwnerId($oppositeInterfaceOwnerId)
    {
        $this->data['OppositeInterfaceOwnerId'] = $oppositeInterfaceOwnerId;
        $this->options['query']['OppositeInterfaceOwnerId'] = $oppositeInterfaceOwnerId;

        return $this;
    }

    /**
     * @param string $routerType
     *
     * @return $this
     */
    public function withRouterType($routerType)
    {
        $this->data['RouterType'] = $routerType;
        $this->options['query']['RouterType'] = $routerType;

        return $this;
    }

    /**
     * @param string $healthCheckSourceIp
     *
     * @return $this
     */
    public function withHealthCheckSourceIp($healthCheckSourceIp)
    {
        $this->data['HealthCheckSourceIp'] = $healthCheckSourceIp;
        $this->options['query']['HealthCheckSourceIp'] = $healthCheckSourceIp;

        return $this;
    }

    /**
     * @param string $routerId
     *
     * @return $this
     */
    public function withRouterId($routerId)
    {
        $this->data['RouterId'] = $routerId;
        $this->options['query']['RouterId'] = $routerId;

        return $this;
    }

    /**
     * @param string $oppositeRouterType
     *
     * @return $this
     */
    public function withOppositeRouterType($oppositeRouterType)
    {
        $this->data['OppositeRouterType'] = $oppositeRouterType;
        $this->options['query']['OppositeRouterType'] = $oppositeRouterType;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @param string $pricingCycle
     *
     * @return $this
     */
    public function withPricingCycle($pricingCycle)
    {
        $this->data['PricingCycle'] = $pricingCycle;
        $this->options['query']['PricingCycle'] = $pricingCycle;

        return $this;
    }
}
