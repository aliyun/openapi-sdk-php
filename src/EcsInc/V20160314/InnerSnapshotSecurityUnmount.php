<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEcsOwnerAliUid()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getAsync()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAliUid()
 * @method string getBid()
 * @method string getSnapshotOwnerAliUid()
 * @method string getProxyId()
 * @method string getSnapshotIndexId()
 */
class InnerSnapshotSecurityUnmount extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param string $ecsOwnerAliUid
     *
     * @return $this
     */
    public function withEcsOwnerAliUid($ecsOwnerAliUid)
    {
        $this->data['EcsOwnerAliUid'] = $ecsOwnerAliUid;
        $this->options['query']['ecsOwnerAliUid'] = $ecsOwnerAliUid;

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
     * @param string $snapshotOwnerAliUid
     *
     * @return $this
     */
    public function withSnapshotOwnerAliUid($snapshotOwnerAliUid)
    {
        $this->data['SnapshotOwnerAliUid'] = $snapshotOwnerAliUid;
        $this->options['query']['snapshotOwnerAliUid'] = $snapshotOwnerAliUid;

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
     * @param string $snapshotIndexId
     *
     * @return $this
     */
    public function withSnapshotIndexId($snapshotIndexId)
    {
        $this->data['SnapshotIndexId'] = $snapshotIndexId;
        $this->options['query']['snapshotIndexId'] = $snapshotIndexId;

        return $this;
    }
}
