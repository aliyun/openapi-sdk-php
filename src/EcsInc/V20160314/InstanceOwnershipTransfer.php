<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getToVSwitchId()
 * @method $this withToVSwitchId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getChannel()
 * @method string getOperator()
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getProxyId()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method array getPrivateIps()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getKeepPublicIp()
 * @method $this withKeepPublicIp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToken()
 * @method string getNewOwnerId()
 * @method $this withNewOwnerId($value)
 * @method string getToSecurityGroupId()
 * @method $this withToSecurityGroupId($value)
 * @method array getInstanceIds()
 * @method string getAppKey()
 * @method string getBid()
 * @method $this withBid($value)
 */
class InstanceOwnershipTransfer extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';

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
     * @param array $privateIps
     *
     * @return $this
     */
    public function withPrivateIps(array $privateIps)
    {
        $this->data['PrivateIps'] = $privateIps;
        foreach ($privateIps as $i => $iValue) {
            $this->options['query']['PrivateIps.' . ($i + 1)] = $iValue;
        }

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
     * @param array $instanceIds
     *
     * @return $this
     */
    public function withInstanceIds(array $instanceIds)
    {
        $this->data['InstanceIds'] = $instanceIds;
        foreach ($instanceIds as $i => $iValue) {
            $this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $appKey
     *
     * @return $this
     */
    public function withAppKey($appKey)
    {
        $this->data['AppKey'] = $appKey;
        $this->options['query']['appKey'] = $appKey;

        return $this;
    }
}
