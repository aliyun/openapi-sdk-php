<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ResourceOwnershipTransfer
 *
 * @method string getResourceOwnerId()
 * @method string getToVSwitchId()
 * @method string getClientToken()
 * @method string getChannel()
 * @method string getOperator()
 * @method string getAliUid()
 * @method string getProxyId()
 * @method string getDryRun()
 * @method array getPrivateIps()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getKeepPublicIp()
 * @method string getOwnerId()
 * @method string getToken()
 * @method string getNewOwnerId()
 * @method string getToSecurityGroupId()
 * @method array getInstanceIds()
 * @method string getAppKey()
 * @method string getBid()
 * @method string getToVSwitchAliUid()
 */
class ResourceOwnershipTransfer extends RpcRequest
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
    public $action = 'ResourceOwnershipTransfer';

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
     * @deprecated deprecated since version 2.0, Use withToVSwitchId() instead.
     *
     * @param string $toVSwitchId
     *
     * @return $this
     */
    public function setToVSwitchId($toVSwitchId)
    {
        return $this->withToVSwitchId($toVSwitchId);
    }

    /**
     * @param string $toVSwitchId
     *
     * @return $this
     */
    public function withToVSwitchId($toVSwitchId)
    {
        $this->data['ToVSwitchId'] = $toVSwitchId;
        $this->options['query']['ToVSwitchId'] = $toVSwitchId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withClientToken() instead.
     *
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        return $this->withClientToken($clientToken);
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

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
     * @deprecated deprecated since version 2.0, Use withAliUid() instead.
     *
     * @param string $aliUid
     *
     * @return $this
     */
    public function setAliUid($aliUid)
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
        $this->options['query']['AliUid'] = $aliUid;

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
     * @deprecated deprecated since version 2.0, Use withDryRun() instead.
     *
     * @param string $dryRun
     *
     * @return $this
     */
    public function setDryRun($dryRun)
    {
        return $this->withDryRun($dryRun);
    }

    /**
     * @param string $dryRun
     *
     * @return $this
     */
    public function withDryRun($dryRun)
    {
        $this->data['DryRun'] = $dryRun;
        $this->options['query']['DryRun'] = $dryRun;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getPrivateIps() instead.
     *
     * @return array
     */
    public function getPrivateIpss()
    {
        return $this->getPrivateIps();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPrivateIps() instead.
     *
     * @param array $privateIpss
     *
     * @return $this
     */
    public function setPrivateIpss(array $privateIpss)
    {
        return $this->withPrivateIps($privateIpss);
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
     * @deprecated deprecated since version 2.0, Use withKeepPublicIp() instead.
     *
     * @param string $keepPublicIp
     *
     * @return $this
     */
    public function setKeepPublicIp($keepPublicIp)
    {
        return $this->withKeepPublicIp($keepPublicIp);
    }

    /**
     * @param string $keepPublicIp
     *
     * @return $this
     */
    public function withKeepPublicIp($keepPublicIp)
    {
        $this->data['KeepPublicIp'] = $keepPublicIp;
        $this->options['query']['KeepPublicIp'] = $keepPublicIp;

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
     * @deprecated deprecated since version 2.0, Use withNewOwnerId() instead.
     *
     * @param string $newOwnerId
     *
     * @return $this
     */
    public function setNewOwnerId($newOwnerId)
    {
        return $this->withNewOwnerId($newOwnerId);
    }

    /**
     * @param string $newOwnerId
     *
     * @return $this
     */
    public function withNewOwnerId($newOwnerId)
    {
        $this->data['NewOwnerId'] = $newOwnerId;
        $this->options['query']['NewOwnerId'] = $newOwnerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withToSecurityGroupId() instead.
     *
     * @param string $toSecurityGroupId
     *
     * @return $this
     */
    public function setToSecurityGroupId($toSecurityGroupId)
    {
        return $this->withToSecurityGroupId($toSecurityGroupId);
    }

    /**
     * @param string $toSecurityGroupId
     *
     * @return $this
     */
    public function withToSecurityGroupId($toSecurityGroupId)
    {
        $this->data['ToSecurityGroupId'] = $toSecurityGroupId;
        $this->options['query']['ToSecurityGroupId'] = $toSecurityGroupId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getInstanceIds() instead.
     *
     * @return array
     */
    public function getInstanceIdss()
    {
        return $this->getInstanceIds();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceIds() instead.
     *
     * @param array $instanceIdss
     *
     * @return $this
     */
    public function setInstanceIdss(array $instanceIdss)
    {
        return $this->withInstanceIds($instanceIdss);
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
     * @deprecated deprecated since version 2.0, Use withAppKey() instead.
     *
     * @param string $appKey
     *
     * @return $this
     */
    public function setappKey($appKey)
    {
        return $this->withAppKey($appKey);
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

    /**
     * @deprecated deprecated since version 2.0, Use withBid() instead.
     *
     * @param string $bid
     *
     * @return $this
     */
    public function setBid($bid)
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
        $this->options['query']['Bid'] = $bid;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withToVSwitchAliUid() instead.
     *
     * @param string $toVSwitchAliUid
     *
     * @return $this
     */
    public function setToVSwitchAliUid($toVSwitchAliUid)
    {
        return $this->withToVSwitchAliUid($toVSwitchAliUid);
    }

    /**
     * @param string $toVSwitchAliUid
     *
     * @return $this
     */
    public function withToVSwitchAliUid($toVSwitchAliUid)
    {
        $this->data['ToVSwitchAliUid'] = $toVSwitchAliUid;
        $this->options['query']['ToVSwitchAliUid'] = $toVSwitchAliUid;

        return $this;
    }
}
