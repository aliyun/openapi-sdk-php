<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyVpcAttribute
 *
 * @method string getVpcName()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getVpcId()
 * @method string getOwnerAccount()
 * @method string getCidrBlock()
 * @method string getDescription()
 * @method string getUserCidr()
 * @method string getOwnerId()
 */
class ModifyVpcAttribute extends RpcRequest
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
    public $action = 'ModifyVpcAttribute';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @param string $vpcId
     *
     * @return $this
     */
    public function withVpcId($vpcId)
    {
        $this->data['VpcId'] = $vpcId;
        $this->options['query']['VpcId'] = $vpcId;

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
}
