<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getChannel()
 * @method string getNic()
 * @method string getVpcInstanceId()
 * @method string getOperator()
 * @method string getAliUid()
 * @method string getProxyId()
 * @method string getPolicy()
 * @method string getSourceGroupNo()
 * @method string getPortRange()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getLevel()
 * @method string getIpProtocol()
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSourceCidrIp()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDestCidrIp()
 * @method string getToken()
 * @method string getSourceGroupOwnerAliUid()
 * @method string getAsync()
 * @method string getSourceGroupId()
 * @method string getBid()
 * @method string getGroupNo()
 */
class InnerGroupAuthorize extends Rpc
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
     * @param string $policy
     *
     * @return $this
     */
    public function withPolicy($policy)
    {
        $this->data['Policy'] = $policy;
        $this->options['query']['policy'] = $policy;

        return $this;
    }

    /**
     * @param string $sourceGroupNo
     *
     * @return $this
     */
    public function withSourceGroupNo($sourceGroupNo)
    {
        $this->data['SourceGroupNo'] = $sourceGroupNo;
        $this->options['query']['sourceGroupNo'] = $sourceGroupNo;

        return $this;
    }

    /**
     * @param string $portRange
     *
     * @return $this
     */
    public function withPortRange($portRange)
    {
        $this->data['PortRange'] = $portRange;
        $this->options['query']['portRange'] = $portRange;

        return $this;
    }

    /**
     * @param string $level
     *
     * @return $this
     */
    public function withLevel($level)
    {
        $this->data['Level'] = $level;
        $this->options['query']['level'] = $level;

        return $this;
    }

    /**
     * @param string $ipProtocol
     *
     * @return $this
     */
    public function withIpProtocol($ipProtocol)
    {
        $this->data['IpProtocol'] = $ipProtocol;
        $this->options['query']['ipProtocol'] = $ipProtocol;

        return $this;
    }

    /**
     * @param string $sourceCidrIp
     *
     * @return $this
     */
    public function withSourceCidrIp($sourceCidrIp)
    {
        $this->data['SourceCidrIp'] = $sourceCidrIp;
        $this->options['query']['sourceCidrIp'] = $sourceCidrIp;

        return $this;
    }

    /**
     * @param string $destCidrIp
     *
     * @return $this
     */
    public function withDestCidrIp($destCidrIp)
    {
        $this->data['DestCidrIp'] = $destCidrIp;
        $this->options['query']['destCidrIp'] = $destCidrIp;

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
     * @param string $sourceGroupOwnerAliUid
     *
     * @return $this
     */
    public function withSourceGroupOwnerAliUid($sourceGroupOwnerAliUid)
    {
        $this->data['SourceGroupOwnerAliUid'] = $sourceGroupOwnerAliUid;
        $this->options['query']['sourceGroupOwnerAliUid'] = $sourceGroupOwnerAliUid;

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
     * @param string $sourceGroupId
     *
     * @return $this
     */
    public function withSourceGroupId($sourceGroupId)
    {
        $this->data['SourceGroupId'] = $sourceGroupId;
        $this->options['query']['sourceGroupId'] = $sourceGroupId;

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
}
