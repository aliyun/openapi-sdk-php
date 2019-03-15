<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method string getReason()
 * @method string getBussinessCode()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCoordinate()
 * @method string getSignatureCode()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getActionCode()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getAsync()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAliUid()
 * @method string getBid()
 * @method string getProxyId()
 */
class InnerEcsRiskControlPunish extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

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
