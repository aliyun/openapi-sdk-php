<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifySecurityGroupEgressRule
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
class ModifySecurityGroupEgressRule extends RpcRequest
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
    public $action = 'ModifySecurityGroupEgressRule';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withNicType() instead.
     *
     * @param string $nicType
     *
     * @return $this
     */
    public function setNicType($nicType)
    {
        return $this->withNicType($nicType);
    }

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
     * @deprecated deprecated since version 2.0, Use withSourcePortRange() instead.
     *
     * @param string $sourcePortRange
     *
     * @return $this
     */
    public function setSourcePortRange($sourcePortRange)
    {
        return $this->withSourcePortRange($sourcePortRange);
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
     * @deprecated deprecated since version 2.0, Use withSecurityGroupId() instead.
     *
     * @param string $securityGroupId
     *
     * @return $this
     */
    public function setSecurityGroupId($securityGroupId)
    {
        return $this->withSecurityGroupId($securityGroupId);
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
     * @deprecated deprecated since version 2.0, Use withIpv6DestCidrIp() instead.
     *
     * @param string $ipv6DestCidrIp
     *
     * @return $this
     */
    public function setIpv6DestCidrIp($ipv6DestCidrIp)
    {
        return $this->withIpv6DestCidrIp($ipv6DestCidrIp);
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
     * @deprecated deprecated since version 2.0, Use withIpv6SourceCidrIp() instead.
     *
     * @param string $ipv6SourceCidrIp
     *
     * @return $this
     */
    public function setIpv6SourceCidrIp($ipv6SourceCidrIp)
    {
        return $this->withIpv6SourceCidrIp($ipv6SourceCidrIp);
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
     * @deprecated deprecated since version 2.0, Use withPolicy() instead.
     *
     * @param string $policy
     *
     * @return $this
     */
    public function setPolicy($policy)
    {
        return $this->withPolicy($policy);
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
     * @deprecated deprecated since version 2.0, Use withPortRange() instead.
     *
     * @param string $portRange
     *
     * @return $this
     */
    public function setPortRange($portRange)
    {
        return $this->withPortRange($portRange);
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
     * @deprecated deprecated since version 2.0, Use withIpProtocol() instead.
     *
     * @param string $ipProtocol
     *
     * @return $this
     */
    public function setIpProtocol($ipProtocol)
    {
        return $this->withIpProtocol($ipProtocol);
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
     * @deprecated deprecated since version 2.0, Use withSourceCidrIp() instead.
     *
     * @param string $sourceCidrIp
     *
     * @return $this
     */
    public function setSourceCidrIp($sourceCidrIp)
    {
        return $this->withSourceCidrIp($sourceCidrIp);
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
     * @deprecated deprecated since version 2.0, Use withDestGroupId() instead.
     *
     * @param string $destGroupId
     *
     * @return $this
     */
    public function setDestGroupId($destGroupId)
    {
        return $this->withDestGroupId($destGroupId);
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
     * @deprecated deprecated since version 2.0, Use withDestGroupOwnerAccount() instead.
     *
     * @param string $destGroupOwnerAccount
     *
     * @return $this
     */
    public function setDestGroupOwnerAccount($destGroupOwnerAccount)
    {
        return $this->withDestGroupOwnerAccount($destGroupOwnerAccount);
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
     * @deprecated deprecated since version 2.0, Use withPriority() instead.
     *
     * @param string $priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        return $this->withPriority($priority);
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
     * @deprecated deprecated since version 2.0, Use withDestCidrIp() instead.
     *
     * @param string $destCidrIp
     *
     * @return $this
     */
    public function setDestCidrIp($destCidrIp)
    {
        return $this->withDestCidrIp($destCidrIp);
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
     * @deprecated deprecated since version 2.0, Use withDestGroupOwnerId() instead.
     *
     * @param string $destGroupOwnerId
     *
     * @return $this
     */
    public function setDestGroupOwnerId($destGroupOwnerId)
    {
        return $this->withDestGroupOwnerId($destGroupOwnerId);
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
