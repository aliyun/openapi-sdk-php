<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddACLRule
 *
 * @method string getAclId()
 * @method string getResourceOwnerId()
 * @method string getSourcePortRange()
 * @method string getResourceOwnerAccount()
 * @method string getIpProtocol()
 * @method string getOwnerAccount()
 * @method string getSourceCidr()
 * @method string getDescription()
 * @method string getOwnerId()
 * @method string getPriority()
 * @method string getDestCidr()
 * @method string getDestPortRange()
 * @method string getDirection()
 * @method string getPolicy()
 */
class AddACLRule extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Smartag';

    /**
     * @var string
     */
    public $version = '2018-03-13';

    /**
     * @var string
     */
    public $action = 'AddACLRule';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'smartag';

    /**
     * @deprecated deprecated since version 2.0, Use withAclId() instead.
     *
     * @param string $aclId
     *
     * @return $this
     */
    public function setAclId($aclId)
    {
        return $this->withAclId($aclId);
    }

    /**
     * @param string $aclId
     *
     * @return $this
     */
    public function withAclId($aclId)
    {
        $this->data['AclId'] = $aclId;
        $this->options['query']['AclId'] = $aclId;

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
     * @deprecated deprecated since version 2.0, Use withSourceCidr() instead.
     *
     * @param string $sourceCidr
     *
     * @return $this
     */
    public function setSourceCidr($sourceCidr)
    {
        return $this->withSourceCidr($sourceCidr);
    }

    /**
     * @param string $sourceCidr
     *
     * @return $this
     */
    public function withSourceCidr($sourceCidr)
    {
        $this->data['SourceCidr'] = $sourceCidr;
        $this->options['query']['SourceCidr'] = $sourceCidr;

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
     * @deprecated deprecated since version 2.0, Use withDestCidr() instead.
     *
     * @param string $destCidr
     *
     * @return $this
     */
    public function setDestCidr($destCidr)
    {
        return $this->withDestCidr($destCidr);
    }

    /**
     * @param string $destCidr
     *
     * @return $this
     */
    public function withDestCidr($destCidr)
    {
        $this->data['DestCidr'] = $destCidr;
        $this->options['query']['DestCidr'] = $destCidr;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDestPortRange() instead.
     *
     * @param string $destPortRange
     *
     * @return $this
     */
    public function setDestPortRange($destPortRange)
    {
        return $this->withDestPortRange($destPortRange);
    }

    /**
     * @param string $destPortRange
     *
     * @return $this
     */
    public function withDestPortRange($destPortRange)
    {
        $this->data['DestPortRange'] = $destPortRange;
        $this->options['query']['DestPortRange'] = $destPortRange;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDirection() instead.
     *
     * @param string $direction
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        return $this->withDirection($direction);
    }

    /**
     * @param string $direction
     *
     * @return $this
     */
    public function withDirection($direction)
    {
        $this->data['Direction'] = $direction;
        $this->options['query']['Direction'] = $direction;

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
}
