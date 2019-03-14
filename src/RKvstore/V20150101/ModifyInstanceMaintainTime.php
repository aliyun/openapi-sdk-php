<?php

namespace AlibabaCloud\RKvstore\V20150101;

use AlibabaCloud\Rpc;

/**
 * Api ModifyInstanceMaintainTime
 *
 * @method string getResourceOwnerId()
 * @method string getInstanceId()
 * @method string getSecurityToken()
 * @method string getResourceOwnerAccount()
 * @method string getMaintainStartTime()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getMaintainEndTime()
 */
class ModifyInstanceMaintainTime extends Rpc
{
    public $product = 'R-kvstore';

    public $version = '2015-01-01';

    public $method = 'POST';

    public $serviceCode = 'redisa';

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
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

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
     * @param string $maintainStartTime
     *
     * @return $this
     */
    public function withMaintainStartTime($maintainStartTime)
    {
        $this->data['MaintainStartTime'] = $maintainStartTime;
        $this->options['query']['MaintainStartTime'] = $maintainStartTime;

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
     * @param string $maintainEndTime
     *
     * @return $this
     */
    public function withMaintainEndTime($maintainEndTime)
    {
        $this->data['MaintainEndTime'] = $maintainEndTime;
        $this->options['query']['MaintainEndTime'] = $maintainEndTime;

        return $this;
    }
}
