<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Rpc;

/**
 * Api ModifyACLRule
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
 * @method string getAcrId()
 * @method string getDestCidr()
 * @method string getDestPortRange()
 * @method string getDirection()
 * @method string getPolicy()
 */
class ModifyACLRule extends Rpc
{
    public $product = 'Smartag';

    public $version = '2018-03-13';

    public $method = 'POST';

    public $serviceCode = 'smartag';

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
     * @param string $acrId
     *
     * @return $this
     */
    public function withAcrId($acrId)
    {
        $this->data['AcrId'] = $acrId;
        $this->options['query']['AcrId'] = $acrId;

        return $this;
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
