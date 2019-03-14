<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * Api ModifySecurityGroupEgressRule
 *
 * @method string getNicType()
 * @method string getResourceOwnerId()
 * @method string getSourcePortRange()
 * @method string getClientToken()
 * @method string getSecurityGroupId()
 * @method string getDescription()
 * @method string getIpv6DestCidrIp()
 * @method string getIpv6SourceCidrIp()
 * @method string getPolicy()
 * @method string getPortRange()
 * @method string getResourceOwnerAccount()
 * @method string getIpProtocol()
 * @method string getOwnerAccount()
 * @method string getSourceCidrIp()
 * @method string getDestGroupId()
 * @method string getOwnerId()
 * @method string getDestGroupOwnerAccount()
 * @method string getPriority()
 * @method string getDestCidrIp()
 * @method string getDestGroupOwnerId()
 */
class ModifySecurityGroupEgressRule extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param string $nicType
     *
     * @return $this
     */
    public function withNicType($nicType)
    {
        $this->data['NicType'] = $nicType;
        $this->options['query']['NicType'] = $nicType;

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
     * @param string $sourcePortRange
     *
     * @return $this
     */
    public function withSourcePortRange($sourcePortRange)
    {
        $this->data['SourcePortRange'] = $sourcePortRange;
        $this->options['query']['SourcePortRange'] = $sourcePortRange;

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
     * @param string $securityGroupId
     *
     * @return $this
     */
    public function withSecurityGroupId($securityGroupId)
    {
        $this->data['SecurityGroupId'] = $securityGroupId;
        $this->options['query']['SecurityGroupId'] = $securityGroupId;

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
     * @param string $ipv6DestCidrIp
     *
     * @return $this
     */
    public function withIpv6DestCidrIp($ipv6DestCidrIp)
    {
        $this->data['Ipv6DestCidrIp'] = $ipv6DestCidrIp;
        $this->options['query']['Ipv6DestCidrIp'] = $ipv6DestCidrIp;

        return $this;
    }

    /**
     * @param string $ipv6SourceCidrIp
     *
     * @return $this
     */
    public function withIpv6SourceCidrIp($ipv6SourceCidrIp)
    {
        $this->data['Ipv6SourceCidrIp'] = $ipv6SourceCidrIp;
        $this->options['query']['Ipv6SourceCidrIp'] = $ipv6SourceCidrIp;

        return $this;
    }

    /**
     * @param string $policy
     *
     * @return $this
     */
    public function withPolicy($policy)
    {
        $this->data['Policy'] = $policy;
        $this->options['query']['Policy'] = $policy;

        return $this;
    }

    /**
     * @param string $portRange
     *
     * @return $this
     */
    public function withPortRange($portRange)
    {
        $this->data['PortRange'] = $portRange;
        $this->options['query']['PortRange'] = $portRange;

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
     * @param string $ipProtocol
     *
     * @return $this
     */
    public function withIpProtocol($ipProtocol)
    {
        $this->data['IpProtocol'] = $ipProtocol;
        $this->options['query']['IpProtocol'] = $ipProtocol;

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
     * @param string $sourceCidrIp
     *
     * @return $this
     */
    public function withSourceCidrIp($sourceCidrIp)
    {
        $this->data['SourceCidrIp'] = $sourceCidrIp;
        $this->options['query']['SourceCidrIp'] = $sourceCidrIp;

        return $this;
    }

    /**
     * @param string $destGroupId
     *
     * @return $this
     */
    public function withDestGroupId($destGroupId)
    {
        $this->data['DestGroupId'] = $destGroupId;
        $this->options['query']['DestGroupId'] = $destGroupId;

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
     * @param string $destGroupOwnerAccount
     *
     * @return $this
     */
    public function withDestGroupOwnerAccount($destGroupOwnerAccount)
    {
        $this->data['DestGroupOwnerAccount'] = $destGroupOwnerAccount;
        $this->options['query']['DestGroupOwnerAccount'] = $destGroupOwnerAccount;

        return $this;
    }

    /**
     * @param string $priority
     *
     * @return $this
     */
    public function withPriority($priority)
    {
        $this->data['Priority'] = $priority;
        $this->options['query']['Priority'] = $priority;

        return $this;
    }

    /**
     * @param string $destCidrIp
     *
     * @return $this
     */
    public function withDestCidrIp($destCidrIp)
    {
        $this->data['DestCidrIp'] = $destCidrIp;
        $this->options['query']['DestCidrIp'] = $destCidrIp;

        return $this;
    }

    /**
     * @param string $destGroupOwnerId
     *
     * @return $this
     */
    public function withDestGroupOwnerId($destGroupOwnerId)
    {
        $this->data['DestGroupOwnerId'] = $destGroupOwnerId;
        $this->options['query']['DestGroupOwnerId'] = $destGroupOwnerId;

        return $this;
    }
}
