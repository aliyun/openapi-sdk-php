<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InnerGroupRevoke
 *
 * @method string getResourceOwnerId()
 * @method string getSourceGroupNo()
 * @method string getPortRange()
 * @method string getResourceOwnerAccount()
 * @method string getLevel()
 * @method string getIpProtocol()
 * @method string getOwnerAccount()
 * @method string getSourceCidrIp()
 * @method string getChannel()
 * @method string getNic()
 * @method string getVpcInstanceId()
 * @method string getOwnerId()
 * @method string getDestCidrIp()
 * @method string getOperator()
 * @method string getToken()
 * @method string getAsync()
 * @method string getSourceGroupOwnerAliUid()
 * @method string getAliUid()
 * @method string getBid()
 * @method string getGroupNo()
 * @method string getProxyId()
 * @method string getPolicy()
 */
class InnerGroupRevoke extends RpcRequest
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
    public $action = 'InnerGroupRevoke';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ecs';

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
     * @deprecated deprecated since version 2.0, Use withSourceGroupNo() instead.
     *
     * @param string $sourceGroupNo
     *
     * @return $this
     */
    public function setsourceGroupNo($sourceGroupNo)
    {
        return $this->withSourceGroupNo($sourceGroupNo);
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
     * @deprecated deprecated since version 2.0, Use withPortRange() instead.
     *
     * @param string $portRange
     *
     * @return $this
     */
    public function setportRange($portRange)
    {
        return $this->withPortRange($portRange);
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
     * @deprecated deprecated since version 2.0, Use withLevel() instead.
     *
     * @param string $level
     *
     * @return $this
     */
    public function setlevel($level)
    {
        return $this->withLevel($level);
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
     * @deprecated deprecated since version 2.0, Use withIpProtocol() instead.
     *
     * @param string $ipProtocol
     *
     * @return $this
     */
    public function setipProtocol($ipProtocol)
    {
        return $this->withIpProtocol($ipProtocol);
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
     * @deprecated deprecated since version 2.0, Use withSourceCidrIp() instead.
     *
     * @param string $sourceCidrIp
     *
     * @return $this
     */
    public function setsourceCidrIp($sourceCidrIp)
    {
        return $this->withSourceCidrIp($sourceCidrIp);
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
     * @deprecated deprecated since version 2.0, Use withChannel() instead.
     *
     * @param string $channel
     *
     * @return $this
     */
    public function setchannel($channel)
    {
        return $this->withChannel($channel);
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
     * @deprecated deprecated since version 2.0, Use withNic() instead.
     *
     * @param string $nic
     *
     * @return $this
     */
    public function setnic($nic)
    {
        return $this->withNic($nic);
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
     * @deprecated deprecated since version 2.0, Use withVpcInstanceId() instead.
     *
     * @param string $vpcInstanceId
     *
     * @return $this
     */
    public function setvpcInstanceId($vpcInstanceId)
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
        $this->options['query']['vpcInstanceId'] = $vpcInstanceId;

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
     * @deprecated deprecated since version 2.0, Use withDestCidrIp() instead.
     *
     * @param string $destCidrIp
     *
     * @return $this
     */
    public function setdestCidrIp($destCidrIp)
    {
        return $this->withDestCidrIp($destCidrIp);
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
     * @deprecated deprecated since version 2.0, Use withOperator() instead.
     *
     * @param string $operator
     *
     * @return $this
     */
    public function setoperator($operator)
    {
        return $this->withOperator($operator);
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
     * @deprecated deprecated since version 2.0, Use withToken() instead.
     *
     * @param string $token
     *
     * @return $this
     */
    public function settoken($token)
    {
        return $this->withToken($token);
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
     * @deprecated deprecated since version 2.0, Use withAsync() instead.
     *
     * @param string $async
     *
     * @return $this
     */
    public function setasync($async)
    {
        return $this->withAsync($async);
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
     * @deprecated deprecated since version 2.0, Use withSourceGroupOwnerAliUid() instead.
     *
     * @param string $sourceGroupOwnerAliUid
     *
     * @return $this
     */
    public function setsourceGroupOwnerAliUid($sourceGroupOwnerAliUid)
    {
        return $this->withSourceGroupOwnerAliUid($sourceGroupOwnerAliUid);
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
     * @deprecated deprecated since version 2.0, Use withAliUid() instead.
     *
     * @param string $aliUid
     *
     * @return $this
     */
    public function setaliUid($aliUid)
    {
        return $this->withAliUid($aliUid);
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
     * @deprecated deprecated since version 2.0, Use withBid() instead.
     *
     * @param string $bid
     *
     * @return $this
     */
    public function setbid($bid)
    {
        return $this->withBid($bid);
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
     * @deprecated deprecated since version 2.0, Use withGroupNo() instead.
     *
     * @param string $groupNo
     *
     * @return $this
     */
    public function setgroupNo($groupNo)
    {
        return $this->withGroupNo($groupNo);
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
     * @deprecated deprecated since version 2.0, Use withProxyId() instead.
     *
     * @param string $proxyId
     *
     * @return $this
     */
    public function setproxyId($proxyId)
    {
        return $this->withProxyId($proxyId);
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
     * @deprecated deprecated since version 2.0, Use withPolicy() instead.
     *
     * @param string $policy
     *
     * @return $this
     */
    public function setpolicy($policy)
    {
        return $this->withPolicy($policy);
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
}
