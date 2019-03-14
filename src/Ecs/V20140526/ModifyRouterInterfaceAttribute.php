<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * Api ModifyRouterInterfaceAttribute
 *
 * @method string getOppositeRouterId()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getDescription()
 * @method string getHealthCheckTargetIp()
 * @method string getOwnerId()
 * @method string getRouterInterfaceId()
 * @method string getOppositeInterfaceOwnerId()
 * @method string getHealthCheckSourceIp()
 * @method string getName()
 * @method string getOppositeRouterType()
 * @method string getOppositeInterfaceId()
 */
class ModifyRouterInterfaceAttribute extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

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
     * @param string $routerInterfaceId
     *
     * @return $this
     */
    public function withRouterInterfaceId($routerInterfaceId)
    {
        $this->data['RouterInterfaceId'] = $routerInterfaceId;
        $this->options['query']['RouterInterfaceId'] = $routerInterfaceId;

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
}
