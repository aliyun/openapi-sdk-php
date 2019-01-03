<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateRouterInterface
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
class CreateRouterInterface extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ecs';

    /**
     * @var string
     */
    public $version = '2014-05-26';

    /**
     * @var string
     */
    public $action = 'CreateRouterInterface';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withAccessPointId() instead.
     *
     * @param string $accessPointId
     *
     * @return $this
     */
    public function setAccessPointId($accessPointId)
    {
        return $this->withAccessPointId($accessPointId);
    }

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
     * @deprecated deprecated since version 2.0, Use withOppositeRouterId() instead.
     *
     * @param string $oppositeRouterId
     *
     * @return $this
     */
    public function setOppositeRouterId($oppositeRouterId)
    {
        return $this->withOppositeRouterId($oppositeRouterId);
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
     * @deprecated deprecated since version 2.0, Use withOppositeAccessPointId() instead.
     *
     * @param string $oppositeAccessPointId
     *
     * @return $this
     */
    public function setOppositeAccessPointId($oppositeAccessPointId)
    {
        return $this->withOppositeAccessPointId($oppositeAccessPointId);
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
     * @deprecated deprecated since version 2.0, Use withRole() instead.
     *
     * @param string $role
     *
     * @return $this
     */
    public function setRole($role)
    {
        return $this->withRole($role);
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
     * @deprecated deprecated since version 2.0, Use withClientToken() instead.
     *
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        return $this->withClientToken($clientToken);
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
     * @deprecated deprecated since version 2.0, Use withHealthCheckTargetIp() instead.
     *
     * @param string $healthCheckTargetIp
     *
     * @return $this
     */
    public function setHealthCheckTargetIp($healthCheckTargetIp)
    {
        return $this->withHealthCheckTargetIp($healthCheckTargetIp);
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
     * @deprecated deprecated since version 2.0, Use withDescription() instead.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->withDescription($description);
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
     * @deprecated deprecated since version 2.0, Use withSpec() instead.
     *
     * @param string $spec
     *
     * @return $this
     */
    public function setSpec($spec)
    {
        return $this->withSpec($spec);
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
     * @deprecated deprecated since version 2.0, Use withUserCidr() instead.
     *
     * @param string $userCidr
     *
     * @return $this
     */
    public function setUserCidr($userCidr)
    {
        return $this->withUserCidr($userCidr);
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
     * @deprecated deprecated since version 2.0, Use withOppositeInterfaceId() instead.
     *
     * @param string $oppositeInterfaceId
     *
     * @return $this
     */
    public function setOppositeInterfaceId($oppositeInterfaceId)
    {
        return $this->withOppositeInterfaceId($oppositeInterfaceId);
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
     * @deprecated deprecated since version 2.0, Use withInstanceChargeType() instead.
     *
     * @param string $instanceChargeType
     *
     * @return $this
     */
    public function setInstanceChargeType($instanceChargeType)
    {
        return $this->withInstanceChargeType($instanceChargeType);
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
     * @deprecated deprecated since version 2.0, Use withPeriod() instead.
     *
     * @param string $period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        return $this->withPeriod($period);
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
     * @deprecated deprecated since version 2.0, Use withAutoPay() instead.
     *
     * @param string $autoPay
     *
     * @return $this
     */
    public function setAutoPay($autoPay)
    {
        return $this->withAutoPay($autoPay);
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
     * @deprecated deprecated since version 2.0, Use withOppositeRegionId() instead.
     *
     * @param string $oppositeRegionId
     *
     * @return $this
     */
    public function setOppositeRegionId($oppositeRegionId)
    {
        return $this->withOppositeRegionId($oppositeRegionId);
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
     * @deprecated deprecated since version 2.0, Use withOppositeInterfaceOwnerId() instead.
     *
     * @param string $oppositeInterfaceOwnerId
     *
     * @return $this
     */
    public function setOppositeInterfaceOwnerId($oppositeInterfaceOwnerId)
    {
        return $this->withOppositeInterfaceOwnerId($oppositeInterfaceOwnerId);
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
     * @deprecated deprecated since version 2.0, Use withRouterType() instead.
     *
     * @param string $routerType
     *
     * @return $this
     */
    public function setRouterType($routerType)
    {
        return $this->withRouterType($routerType);
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
     * @deprecated deprecated since version 2.0, Use withHealthCheckSourceIp() instead.
     *
     * @param string $healthCheckSourceIp
     *
     * @return $this
     */
    public function setHealthCheckSourceIp($healthCheckSourceIp)
    {
        return $this->withHealthCheckSourceIp($healthCheckSourceIp);
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
     * @deprecated deprecated since version 2.0, Use withRouterId() instead.
     *
     * @param string $routerId
     *
     * @return $this
     */
    public function setRouterId($routerId)
    {
        return $this->withRouterId($routerId);
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
     * @deprecated deprecated since version 2.0, Use withOppositeRouterType() instead.
     *
     * @param string $oppositeRouterType
     *
     * @return $this
     */
    public function setOppositeRouterType($oppositeRouterType)
    {
        return $this->withOppositeRouterType($oppositeRouterType);
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
     * @deprecated deprecated since version 2.0, Use withName() instead.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        return $this->withName($name);
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
     * @deprecated deprecated since version 2.0, Use withPricingCycle() instead.
     *
     * @param string $pricingCycle
     *
     * @return $this
     */
    public function setPricingCycle($pricingCycle)
    {
        return $this->withPricingCycle($pricingCycle);
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
