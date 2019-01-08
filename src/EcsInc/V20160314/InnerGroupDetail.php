<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InnerGroupDetail
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getChannel()
 * @method string getNic()
 * @method string getVpcInstanceId()
 * @method string getOwnerId()
 * @method string getOperator()
 * @method string getToken()
 * @method string getAsync()
 * @method string getAliUid()
 * @method string getBid()
 * @method string getGroupNo()
 * @method string getProxyId()
 * @method string getDirection()
 */
class InnerGroupDetail extends RpcRequest
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
    public $action = 'InnerGroupDetail';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ecs';

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
     * @param string $nic
     *
     * @return $this
     */
    public function withNic($nic)
    {
        $this->data['Nic'] = $nic;
        $this->options['query']['nic'] = $nic;

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
        $this->options['query']['vpcInstanceId'] = $vpcInstanceId;

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
     * @param string $groupNo
     *
     * @return $this
     */
    public function withGroupNo($groupNo)
    {
        $this->data['GroupNo'] = $groupNo;
        $this->options['query']['groupNo'] = $groupNo;

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

    /**
     * @param string $direction
     *
     * @return $this
     */
    public function withDirection($direction)
    {
        $this->data['Direction'] = $direction;
        $this->options['query']['direction'] = $direction;

        return $this;
    }
}
