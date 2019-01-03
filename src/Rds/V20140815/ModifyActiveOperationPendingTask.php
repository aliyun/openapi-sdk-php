<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyActiveOperationPendingTask
 *
 * @method string getVpcTaskIdList()
 * @method string getIpAddress()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getTaskIdList()
 * @method string getVpcInstanceId()
 * @method string getOwnerId()
 * @method string getVSwitchId()
 * @method string getSecurityToken()
 * @method string getVpcId()
 * @method string getTunnelId()
 * @method string getSwitchTime()
 * @method string getRegion()
 */
class ModifyActiveOperationPendingTask extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Rds';

    /**
     * @var string
     */
    public $version = '2014-08-15';

    /**
     * @var string
     */
    public $action = 'ModifyActiveOperationPendingTask';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'rds';

    /**
     * @deprecated deprecated since version 2.0, Use withVpcTaskIdList() instead.
     *
     * @param string $vpcTaskIdList
     *
     * @return $this
     */
    public function setVpcTaskIdList($vpcTaskIdList)
    {
        return $this->withVpcTaskIdList($vpcTaskIdList);
    }

    /**
     * @param string $vpcTaskIdList
     *
     * @return $this
     */
    public function withVpcTaskIdList($vpcTaskIdList)
    {
        $this->data['VpcTaskIdList'] = $vpcTaskIdList;
        $this->options['query']['VpcTaskIdList'] = $vpcTaskIdList;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIpAddress() instead.
     *
     * @param string $ipAddress
     *
     * @return $this
     */
    public function setIpAddress($ipAddress)
    {
        return $this->withIpAddress($ipAddress);
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
     * @deprecated deprecated since version 2.0, Use withTaskIdList() instead.
     *
     * @param string $taskIdList
     *
     * @return $this
     */
    public function setTaskIdList($taskIdList)
    {
        return $this->withTaskIdList($taskIdList);
    }

    /**
     * @param string $taskIdList
     *
     * @return $this
     */
    public function withTaskIdList($taskIdList)
    {
        $this->data['TaskIdList'] = $taskIdList;
        $this->options['query']['TaskIdList'] = $taskIdList;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVpcInstanceId() instead.
     *
     * @param string $vpcInstanceId
     *
     * @return $this
     */
    public function setVpcInstanceId($vpcInstanceId)
    {
        return $this->withVpcInstanceId($vpcInstanceId);
    }

    /**
     * @param string $vpcInstanceId
     *
     * @return $this
     */
    public function withVpcInstanceId($vpcInstanceId)
    {
        $this->data['VpcInstanceId'] = $vpcInstanceId;
        $this->options['query']['VpcInstanceId'] = $vpcInstanceId;

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
     * @deprecated deprecated since version 2.0, Use withVSwitchId() instead.
     *
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function setVSwitchId($vSwitchId)
    {
        return $this->withVSwitchId($vSwitchId);
    }

    /**
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function withVSwitchId($vSwitchId)
    {
        $this->data['VSwitchId'] = $vSwitchId;
        $this->options['query']['VSwitchId'] = $vSwitchId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSecurityToken() instead.
     *
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        return $this->withSecurityToken($securityToken);
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken'] = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVpcId() instead.
     *
     * @param string $vpcId
     *
     * @return $this
     */
    public function setVpcId($vpcId)
    {
        return $this->withVpcId($vpcId);
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
     * @deprecated deprecated since version 2.0, Use withTunnelId() instead.
     *
     * @param string $tunnelId
     *
     * @return $this
     */
    public function setTunnelId($tunnelId)
    {
        return $this->withTunnelId($tunnelId);
    }

    /**
     * @param string $tunnelId
     *
     * @return $this
     */
    public function withTunnelId($tunnelId)
    {
        $this->data['TunnelId'] = $tunnelId;
        $this->options['query']['TunnelId'] = $tunnelId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSwitchTime() instead.
     *
     * @param string $switchTime
     *
     * @return $this
     */
    public function setSwitchTime($switchTime)
    {
        return $this->withSwitchTime($switchTime);
    }

    /**
     * @param string $switchTime
     *
     * @return $this
     */
    public function withSwitchTime($switchTime)
    {
        $this->data['SwitchTime'] = $switchTime;
        $this->options['query']['SwitchTime'] = $switchTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRegion() instead.
     *
     * @param string $region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        return $this->withRegion($region);
    }

    /**
     * @param string $region
     *
     * @return $this
     */
    public function withRegion($region)
    {
        $this->data['Region'] = $region;
        $this->options['query']['Region'] = $region;

        return $this;
    }
}
