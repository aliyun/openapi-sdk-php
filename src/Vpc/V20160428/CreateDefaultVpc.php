<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateDefaultVpc
 *
 * @method string getResourceGroupId()
 * @method string getEnableDefaultVSwitch()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getOwnerAccount()
 * @method string getEnableIpv6()
 * @method array getZoneId()
 * @method string getOwnerId()
 * @method string getIpv6CidrBlock()
 */
class CreateDefaultVpc extends RpcRequest
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
    public $action = 'CreateDefaultVpc';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vpc';

    /**
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function withResourceGroupId($resourceGroupId)
    {
        $this->data['ResourceGroupId'] = $resourceGroupId;
        $this->options['query']['ResourceGroupId'] = $resourceGroupId;

        return $this;
    }

    /**
     * @param string $enableDefaultVSwitch
     *
     * @return $this
     */
    public function withEnableDefaultVSwitch($enableDefaultVSwitch)
    {
        $this->data['EnableDefaultVSwitch'] = $enableDefaultVSwitch;
        $this->options['query']['EnableDefaultVSwitch'] = $enableDefaultVSwitch;

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
     * @param string $enableIpv6
     *
     * @return $this
     */
    public function withEnableIpv6($enableIpv6)
    {
        $this->data['EnableIpv6'] = $enableIpv6;
        $this->options['query']['EnableIpv6'] = $enableIpv6;

        return $this;
    }

    /**
     * @param array $zoneId
     *
     * @return $this
     */
    public function withZoneId(array $zoneId)
    {
        $this->data['ZoneId'] = $zoneId;
        foreach ($zoneId as $i => $iValue) {
            $this->options['query']['ZoneId.' . ($i + 1)] = $iValue;
        }

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
     * @param string $ipv6CidrBlock
     *
     * @return $this
     */
    public function withIpv6CidrBlock($ipv6CidrBlock)
    {
        $this->data['Ipv6CidrBlock'] = $ipv6CidrBlock;
        $this->options['query']['Ipv6CidrBlock'] = $ipv6CidrBlock;

        return $this;
    }
}
