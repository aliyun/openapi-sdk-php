<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Rpc;

/**
 * Api ModifyActiveOperationPendingTask
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
class ModifyActiveOperationPendingTask extends Rpc
{
    public $product = 'Rds';

    public $version = '2014-08-15';

    public $method = 'POST';

    public $serviceCode = 'rds';

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
