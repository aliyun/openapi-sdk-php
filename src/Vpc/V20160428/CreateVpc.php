<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateVpc
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getOwnerAccount()
 * @method string getEnableIpv6()
 * @method string getDescription()
 * @method string getOwnerId()
 * @method string getIpv6CidrBlock()
 * @method string getVpcName()
 * @method string getResourceGroupId()
 * @method string getCidrBlock()
 * @method string getUserCidr()
 */
class CreateVpc extends RpcRequest
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
    public $action = 'CreateVpc';

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

    /**
     * @param string $vpcName
     *
     * @return $this
     */
    public function withVpcName($vpcName)
    {
        $this->data['VpcName'] = $vpcName;
        $this->options['query']['VpcName'] = $vpcName;

        return $this;
    }

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
     * @param string $cidrBlock
     *
     * @return $this
     */
    public function withCidrBlock($cidrBlock)
    {
        $this->data['CidrBlock'] = $cidrBlock;
        $this->options['query']['CidrBlock'] = $cidrBlock;

        return $this;
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
}
