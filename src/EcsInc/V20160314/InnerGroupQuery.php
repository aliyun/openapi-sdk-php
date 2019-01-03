<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InnerGroupQuery
 *
 * @method string getResourceOwnerId()
 * @method string getFuzzyQuery()
 * @method string getChannel()
 * @method string getIsQueryEcsCount()
 * @method string getVpcInstanceId()
 * @method string getNetworkType()
 * @method string getOperator()
 * @method string getPageSize()
 * @method string getAliUid()
 * @method string getGroupNos()
 * @method string getProxyId()
 * @method string getEcsInstanceId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getGroupName()
 * @method string getToken()
 * @method string getIsOnlyQueryVpcGroup()
 * @method string getTags()
 * @method string getRegionNo()
 * @method string getAsync()
 * @method string getPageNo()
 * @method string getBid()
 * @method string getGroupNo()
 */
class InnerGroupQuery extends RpcRequest
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
    public $action = 'InnerGroupQuery';

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
     * @deprecated deprecated since version 2.0, Use withFuzzyQuery() instead.
     *
     * @param string $fuzzyQuery
     *
     * @return $this
     */
    public function setfuzzyQuery($fuzzyQuery)
    {
        return $this->withFuzzyQuery($fuzzyQuery);
    }

    /**
     * @param string $fuzzyQuery
     *
     * @return $this
     */
    public function withFuzzyQuery($fuzzyQuery)
    {
        $this->data['FuzzyQuery'] = $fuzzyQuery;
        $this->options['query']['fuzzyQuery'] = $fuzzyQuery;

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
     * @deprecated deprecated since version 2.0, Use withIsQueryEcsCount() instead.
     *
     * @param string $isQueryEcsCount
     *
     * @return $this
     */
    public function setisQueryEcsCount($isQueryEcsCount)
    {
        return $this->withIsQueryEcsCount($isQueryEcsCount);
    }

    /**
     * @param string $isQueryEcsCount
     *
     * @return $this
     */
    public function withIsQueryEcsCount($isQueryEcsCount)
    {
        $this->data['IsQueryEcsCount'] = $isQueryEcsCount;
        $this->options['query']['isQueryEcsCount'] = $isQueryEcsCount;

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
     * @deprecated deprecated since version 2.0, Use withNetworkType() instead.
     *
     * @param string $networkType
     *
     * @return $this
     */
    public function setnetworkType($networkType)
    {
        return $this->withNetworkType($networkType);
    }

    /**
     * @param string $networkType
     *
     * @return $this
     */
    public function withNetworkType($networkType)
    {
        $this->data['NetworkType'] = $networkType;
        $this->options['query']['networkType'] = $networkType;

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
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setpageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['pageSize'] = $pageSize;

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
     * @deprecated deprecated since version 2.0, Use withGroupNos() instead.
     *
     * @param string $groupNos
     *
     * @return $this
     */
    public function setgroupNos($groupNos)
    {
        return $this->withGroupNos($groupNos);
    }

    /**
     * @param string $groupNos
     *
     * @return $this
     */
    public function withGroupNos($groupNos)
    {
        $this->data['GroupNos'] = $groupNos;
        $this->options['query']['groupNos'] = $groupNos;

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
     * @deprecated deprecated since version 2.0, Use withEcsInstanceId() instead.
     *
     * @param string $ecsInstanceId
     *
     * @return $this
     */
    public function setecsInstanceId($ecsInstanceId)
    {
        return $this->withEcsInstanceId($ecsInstanceId);
    }

    /**
     * @param string $ecsInstanceId
     *
     * @return $this
     */
    public function withEcsInstanceId($ecsInstanceId)
    {
        $this->data['EcsInstanceId'] = $ecsInstanceId;
        $this->options['query']['ecsInstanceId'] = $ecsInstanceId;

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
     * @deprecated deprecated since version 2.0, Use withGroupName() instead.
     *
     * @param string $groupName
     *
     * @return $this
     */
    public function setgroupName($groupName)
    {
        return $this->withGroupName($groupName);
    }

    /**
     * @param string $groupName
     *
     * @return $this
     */
    public function withGroupName($groupName)
    {
        $this->data['GroupName'] = $groupName;
        $this->options['query']['groupName'] = $groupName;

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
     * @deprecated deprecated since version 2.0, Use withIsOnlyQueryVpcGroup() instead.
     *
     * @param string $isOnlyQueryVpcGroup
     *
     * @return $this
     */
    public function setisOnlyQueryVpcGroup($isOnlyQueryVpcGroup)
    {
        return $this->withIsOnlyQueryVpcGroup($isOnlyQueryVpcGroup);
    }

    /**
     * @param string $isOnlyQueryVpcGroup
     *
     * @return $this
     */
    public function withIsOnlyQueryVpcGroup($isOnlyQueryVpcGroup)
    {
        $this->data['IsOnlyQueryVpcGroup'] = $isOnlyQueryVpcGroup;
        $this->options['query']['isOnlyQueryVpcGroup'] = $isOnlyQueryVpcGroup;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTags() instead.
     *
     * @param string $tags
     *
     * @return $this
     */
    public function settags($tags)
    {
        return $this->withTags($tags);
    }

    /**
     * @param string $tags
     *
     * @return $this
     */
    public function withTags($tags)
    {
        $this->data['Tags'] = $tags;
        $this->options['query']['tags'] = $tags;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRegionNo() instead.
     *
     * @param string $regionNo
     *
     * @return $this
     */
    public function setregionNo($regionNo)
    {
        return $this->withRegionNo($regionNo);
    }

    /**
     * @param string $regionNo
     *
     * @return $this
     */
    public function withRegionNo($regionNo)
    {
        $this->data['RegionNo'] = $regionNo;
        $this->options['query']['regionNo'] = $regionNo;

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
     * @deprecated deprecated since version 2.0, Use withPageNo() instead.
     *
     * @param string $pageNo
     *
     * @return $this
     */
    public function setpageNo($pageNo)
    {
        return $this->withPageNo($pageNo);
    }

    /**
     * @param string $pageNo
     *
     * @return $this
     */
    public function withPageNo($pageNo)
    {
        $this->data['PageNo'] = $pageNo;
        $this->options['query']['pageNo'] = $pageNo;

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
}
