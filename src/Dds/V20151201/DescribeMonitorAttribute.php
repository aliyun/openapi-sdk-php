<?php

namespace AlibabaCloud\Dds\V20151201;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeMonitorAttribute
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getOwnerId()
 * @method string getNodeInstanceId()
 * @method string getSecurityToken()
 * @method string getMonitorInstanceId()
 * @method string getKey()
 */
class DescribeMonitorAttribute extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Dds';

    /**
     * @var string
     */
    public $version = '2015-12-01';

    /**
     * @var string
     */
    public $action = 'DescribeMonitorAttribute';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'dds';

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
     * @deprecated deprecated since version 2.0, Use withEndTime() instead.
     *
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        return $this->withEndTime($endTime);
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function withEndTime($endTime)
    {
        $this->data['EndTime'] = $endTime;
        $this->options['query']['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStartTime() instead.
     *
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        return $this->withStartTime($startTime);
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function withStartTime($startTime)
    {
        $this->data['StartTime'] = $startTime;
        $this->options['query']['StartTime'] = $startTime;

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
     * @deprecated deprecated since version 2.0, Use withNodeInstanceId() instead.
     *
     * @param string $nodeInstanceId
     *
     * @return $this
     */
    public function setNodeInstanceId($nodeInstanceId)
    {
        return $this->withNodeInstanceId($nodeInstanceId);
    }

    /**
     * @param string $nodeInstanceId
     *
     * @return $this
     */
    public function withNodeInstanceId($nodeInstanceId)
    {
        $this->data['NodeInstanceId'] = $nodeInstanceId;
        $this->options['query']['NodeInstanceId'] = $nodeInstanceId;

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
     * @deprecated deprecated since version 2.0, Use withMonitorInstanceId() instead.
     *
     * @param string $monitorInstanceId
     *
     * @return $this
     */
    public function setMonitorInstanceId($monitorInstanceId)
    {
        return $this->withMonitorInstanceId($monitorInstanceId);
    }

    /**
     * @param string $monitorInstanceId
     *
     * @return $this
     */
    public function withMonitorInstanceId($monitorInstanceId)
    {
        $this->data['MonitorInstanceId'] = $monitorInstanceId;
        $this->options['query']['MonitorInstanceId'] = $monitorInstanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withKey() instead.
     *
     * @param string $key
     *
     * @return $this
     */
    public function setKey($key)
    {
        return $this->withKey($key);
    }

    /**
     * @param string $key
     *
     * @return $this
     */
    public function withKey($key)
    {
        $this->data['Key'] = $key;
        $this->options['query']['Key'] = $key;

        return $this;
    }
}
