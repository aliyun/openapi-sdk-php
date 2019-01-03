<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyRouterInterfaceAttribute
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
class ModifyRouterInterfaceAttribute extends RpcRequest
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
    public $action = 'ModifyRouterInterfaceAttribute';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withRouterInterfaceId() instead.
     *
     * @param string $routerInterfaceId
     *
     * @return $this
     */
    public function setRouterInterfaceId($routerInterfaceId)
    {
        return $this->withRouterInterfaceId($routerInterfaceId);
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
}
