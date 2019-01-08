<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeIpv6EgressOnlyRules
 *
 * @method string getResourceOwnerId()
 * @method string getPageNumber()
 * @method string getIpv6EgressOnlyRuleId()
 * @method string getPageSize()
 * @method string getInstanceType()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getInstanceId()
 * @method string getIpv6GatewayId()
 * @method string getName()
 */
class DescribeIpv6EgressOnlyRules extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Vpc';

    /**
     * @var string
     */
    public $version = '2016-04-28';

    /**
     * @var string
     */
    public $action = 'DescribeIpv6EgressOnlyRules';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vpc';

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
     * @param string $pageNumber
     *
     * @return $this
     */
    public function withPageNumber($pageNumber)
    {
        $this->data['PageNumber'] = $pageNumber;
        $this->options['query']['PageNumber'] = $pageNumber;

        return $this;
    }

    /**
     * @param string $ipv6EgressOnlyRuleId
     *
     * @return $this
     */
    public function withIpv6EgressOnlyRuleId($ipv6EgressOnlyRuleId)
    {
        $this->data['Ipv6EgressOnlyRuleId'] = $ipv6EgressOnlyRuleId;
        $this->options['query']['Ipv6EgressOnlyRuleId'] = $ipv6EgressOnlyRuleId;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $instanceType
     *
     * @return $this
     */
    public function withInstanceType($instanceType)
    {
        $this->data['InstanceType'] = $instanceType;
        $this->options['query']['InstanceType'] = $instanceType;

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
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $ipv6GatewayId
     *
     * @return $this
     */
    public function withIpv6GatewayId($ipv6GatewayId)
    {
        $this->data['Ipv6GatewayId'] = $ipv6GatewayId;
        $this->options['query']['Ipv6GatewayId'] = $ipv6GatewayId;

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
}
