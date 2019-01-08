<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InnerEcsRiskControlPunishRemove
 *
 * @method string getReason()
 * @method string getBussinessCode()
 * @method string getResourceOwnerId()
 * @method string getCoordinate()
 * @method string getSignatureCode()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getChannel()
 * @method string getPunishResult()
 * @method string getActionCode()
 * @method string getOwnerId()
 * @method string getOperator()
 * @method string getToken()
 * @method string getAsync()
 * @method string getInstanceId()
 * @method string getAliUid()
 * @method string getBid()
 * @method string getProxyId()
 */
class InnerEcsRiskControlPunishRemove extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EcsInc';

    /**
     * @var string
     */
    public $version = '2016-03-14';

    /**
     * @var string
     */
    public $action = 'InnerEcsRiskControlPunishRemove';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ecs';

    /**
     * @param string $reason
     *
     * @return $this
     */
    public function withReason($reason)
    {
        $this->data['Reason'] = $reason;
        $this->options['query']['reason'] = $reason;

        return $this;
    }

    /**
     * @param string $bussinessCode
     *
     * @return $this
     */
    public function withBussinessCode($bussinessCode)
    {
        $this->data['BussinessCode'] = $bussinessCode;
        $this->options['query']['bussinessCode'] = $bussinessCode;

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
     * @param string $coordinate
     *
     * @return $this
     */
    public function withCoordinate($coordinate)
    {
        $this->data['Coordinate'] = $coordinate;
        $this->options['query']['coordinate'] = $coordinate;

        return $this;
    }

    /**
     * @param string $signatureCode
     *
     * @return $this
     */
    public function withSignatureCode($signatureCode)
    {
        $this->data['SignatureCode'] = $signatureCode;
        $this->options['query']['signatureCode'] = $signatureCode;

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
     * @param string $channel
     *
     * @return $this
     */
    public function withChannel($channel)
    {
        $this->data['Channel'] = $channel;
        $this->options['query']['channel'] = $channel;

        return $this;
    }

    /**
     * @param string $punishResult
     *
     * @return $this
     */
    public function withPunishResult($punishResult)
    {
        $this->data['PunishResult'] = $punishResult;
        $this->options['query']['punishResult'] = $punishResult;

        return $this;
    }

    /**
     * @param string $actionCode
     *
     * @return $this
     */
    public function withActionCode($actionCode)
    {
        $this->data['ActionCode'] = $actionCode;
        $this->options['query']['actionCode'] = $actionCode;

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
     * @param string $operator
     *
     * @return $this
     */
    public function withOperator($operator)
    {
        $this->data['Operator'] = $operator;
        $this->options['query']['operator'] = $operator;

        return $this;
    }

    /**
     * @param string $token
     *
     * @return $this
     */
    public function withToken($token)
    {
        $this->data['Token'] = $token;
        $this->options['query']['token'] = $token;

        return $this;
    }

    /**
     * @param string $async
     *
     * @return $this
     */
    public function withAsync($async)
    {
        $this->data['Async'] = $async;
        $this->options['query']['async'] = $async;

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
     * @param string $aliUid
     *
     * @return $this
     */
    public function withAliUid($aliUid)
    {
        $this->data['AliUid'] = $aliUid;
        $this->options['query']['aliUid'] = $aliUid;

        return $this;
    }

    /**
     * @param string $bid
     *
     * @return $this
     */
    public function withBid($bid)
    {
        $this->data['Bid'] = $bid;
        $this->options['query']['bid'] = $bid;

        return $this;
    }

    /**
     * @param string $proxyId
     *
     * @return $this
     */
    public function withProxyId($proxyId)
    {
        $this->data['ProxyId'] = $proxyId;
        $this->options['query']['proxyId'] = $proxyId;

        return $this;
    }
}
