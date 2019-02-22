<?php

namespace AlibabaCloud\Uis\V20180821;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateUisNetworkInterface
 *
 * @method string getVswitchId()
 * @method string getIpAddress()
 * @method string getResourceOwnerId()
 * @method string getUisNodeId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getSecurityGroupId()
 * @method string getName()
 * @method string getDescription()
 * @method string getOwnerId()
 */
class CreateUisNetworkInterface extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Uis';

    /**
     * @var string
     */
    public $version = '2018-08-21';

    /**
     * @var string
     */
    public $action = 'CreateUisNetworkInterface';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'uis';

    /**
     * @param string $vswitchId
     *
     * @return $this
     */
    public function withVswitchId($vswitchId)
    {
        $this->data['VswitchId'] = $vswitchId;
        $this->options['query']['VswitchId'] = $vswitchId;

        return $this;
    }

    /**
     * @param string $ipAddress
     *
     * @return $this
     */
    public function withIpAddress($ipAddress)
    {
        $this->data['IpAddress'] = $ipAddress;
        $this->options['query']['IpAddress'] = $ipAddress;

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
     * @param string $uisNodeId
     *
     * @return $this
     */
    public function withUisNodeId($uisNodeId)
    {
        $this->data['UisNodeId'] = $uisNodeId;
        $this->options['query']['UisNodeId'] = $uisNodeId;

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
}
