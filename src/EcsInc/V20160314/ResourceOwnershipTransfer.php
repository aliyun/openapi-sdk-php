<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * Api ResourceOwnershipTransfer
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
class ResourceOwnershipTransfer extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

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
