<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AuthorizeSecurityGroup
 *
 * @method string getNicType()
 * @method string getResourceOwnerId()
 * @method string getSourcePortRange()
 * @method string getClientToken()
 * @method string getSecurityGroupId()
 * @method string getDescription()
 * @method string getSourceGroupOwnerId()
 * @method string getSourceGroupOwnerAccount()
 * @method string getIpv6SourceCidrIp()
 * @method string getIpv6DestCidrIp()
 * @method string getPolicy()
 * @method string getPortRange()
 * @method string getResourceOwnerAccount()
 * @method string getIpProtocol()
 * @method string getOwnerAccount()
 * @method string getSourceCidrIp()
 * @method string getOwnerId()
 * @method string getPriority()
 * @method string getDestCidrIp()
 * @method string getSourceGroupId()
 */
class AuthorizeSecurityGroup extends RpcRequest
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
    public $action = 'AuthorizeSecurityGroup';

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
     * @deprecated deprecated since version 2.0, Use withSourceGroupOwnerId() instead.
     *
     * @param string $sourceGroupOwnerId
     *
     * @return $this
     */
    public function setSourceGroupOwnerId($sourceGroupOwnerId)
    {
        return $this->withSourceGroupOwnerId($sourceGroupOwnerId);
    }

    /**
     * @param string $sourceGroupOwnerId
     *
     * @return $this
     */
    public function withSourceGroupOwnerId($sourceGroupOwnerId)
    {
        $this->data['SourceGroupOwnerId'] = $sourceGroupOwnerId;
        $this->options['query']['SourceGroupOwnerId'] = $sourceGroupOwnerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSourceGroupOwnerAccount() instead.
     *
     * @param string $sourceGroupOwnerAccount
     *
     * @return $this
     */
    public function setSourceGroupOwnerAccount($sourceGroupOwnerAccount)
    {
        return $this->withSourceGroupOwnerAccount($sourceGroupOwnerAccount);
    }

    /**
     * @param string $sourceGroupOwnerAccount
     *
     * @return $this
     */
    public function withSourceGroupOwnerAccount($sourceGroupOwnerAccount)
    {
        $this->data['SourceGroupOwnerAccount'] = $sourceGroupOwnerAccount;
        $this->options['query']['SourceGroupOwnerAccount'] = $sourceGroupOwnerAccount;

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
     * @deprecated deprecated since version 2.0, Use withSourceGroupId() instead.
     *
     * @param string $sourceGroupId
     *
     * @return $this
     */
    public function setSourceGroupId($sourceGroupId)
    {
        return $this->withSourceGroupId($sourceGroupId);
    }

    /**
     * @param string $sourceGroupId
     *
     * @return $this
     */
    public function withSourceGroupId($sourceGroupId)
    {
        $this->data['SourceGroupId'] = $sourceGroupId;
        $this->options['query']['SourceGroupId'] = $sourceGroupId;

        return $this;
    }
}
