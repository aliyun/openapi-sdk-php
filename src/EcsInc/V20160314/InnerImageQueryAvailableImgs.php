<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InnerImageQueryAvailableImgs
 *
 * @method string getResourceOwnerId()
 * @method string getSnapshotId()
 * @method string getIoOptimized()
 * @method string getChannel()
 * @method string getIsAll()
 * @method string getFuzzyImageName()
 * @method string getOperator()
 * @method string getImageOwnerAlias()
 * @method string getImageName()
 * @method string getPageSize()
 * @method string getInstanceType()
 * @method string getAliUid()
 * @method string getQuoteType()
 * @method string getCreateEndTime()
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getUserCountryType()
 * @method string getOsType()
 * @method string getOwnerId()
 * @method string getCreateStartTime()
 * @method string getToken()
 * @method string getTags()
 * @method string getRegionNos()
 * @method string getAsync()
 * @method string getPageNo()
 * @method string getOsBit()
 * @method string getBid()
 * @method string getImageIds()
 * @method string getStatus()
 */
class InnerImageQueryAvailableImgs extends RpcRequest
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
    public $action = 'InnerImageQueryAvailableImgs';

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
     * @deprecated deprecated since version 2.0, Use withSnapshotId() instead.
     *
     * @param string $snapshotId
     *
     * @return $this
     */
    public function setsnapshotId($snapshotId)
    {
        return $this->withSnapshotId($snapshotId);
    }

    /**
     * @param string $snapshotId
     *
     * @return $this
     */
    public function withSnapshotId($snapshotId)
    {
        $this->data['SnapshotId'] = $snapshotId;
        $this->options['query']['snapshotId'] = $snapshotId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIoOptimized() instead.
     *
     * @param string $ioOptimized
     *
     * @return $this
     */
    public function setioOptimized($ioOptimized)
    {
        return $this->withIoOptimized($ioOptimized);
    }

    /**
     * @param string $ioOptimized
     *
     * @return $this
     */
    public function withIoOptimized($ioOptimized)
    {
        $this->data['IoOptimized'] = $ioOptimized;
        $this->options['query']['ioOptimized'] = $ioOptimized;

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
     * @deprecated deprecated since version 2.0, Use withIsAll() instead.
     *
     * @param string $isAll
     *
     * @return $this
     */
    public function setisAll($isAll)
    {
        return $this->withIsAll($isAll);
    }

    /**
     * @param string $isAll
     *
     * @return $this
     */
    public function withIsAll($isAll)
    {
        $this->data['IsAll'] = $isAll;
        $this->options['query']['isAll'] = $isAll;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFuzzyImageName() instead.
     *
     * @param string $fuzzyImageName
     *
     * @return $this
     */
    public function setfuzzyImageName($fuzzyImageName)
    {
        return $this->withFuzzyImageName($fuzzyImageName);
    }

    /**
     * @param string $fuzzyImageName
     *
     * @return $this
     */
    public function withFuzzyImageName($fuzzyImageName)
    {
        $this->data['FuzzyImageName'] = $fuzzyImageName;
        $this->options['query']['fuzzyImageName'] = $fuzzyImageName;

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
     * @deprecated deprecated since version 2.0, Use withImageOwnerAlias() instead.
     *
     * @param string $imageOwnerAlias
     *
     * @return $this
     */
    public function setimageOwnerAlias($imageOwnerAlias)
    {
        return $this->withImageOwnerAlias($imageOwnerAlias);
    }

    /**
     * @param string $imageOwnerAlias
     *
     * @return $this
     */
    public function withImageOwnerAlias($imageOwnerAlias)
    {
        $this->data['ImageOwnerAlias'] = $imageOwnerAlias;
        $this->options['query']['imageOwnerAlias'] = $imageOwnerAlias;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withImageName() instead.
     *
     * @param string $imageName
     *
     * @return $this
     */
    public function setimageName($imageName)
    {
        return $this->withImageName($imageName);
    }

    /**
     * @param string $imageName
     *
     * @return $this
     */
    public function withImageName($imageName)
    {
        $this->data['ImageName'] = $imageName;
        $this->options['query']['imageName'] = $imageName;

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
     * @deprecated deprecated since version 2.0, Use withInstanceType() instead.
     *
     * @param string $instanceType
     *
     * @return $this
     */
    public function setinstanceType($instanceType)
    {
        return $this->withInstanceType($instanceType);
    }

    /**
     * @param string $instanceType
     *
     * @return $this
     */
    public function withInstanceType($instanceType)
    {
        $this->data['InstanceType'] = $instanceType;
        $this->options['query']['instanceType'] = $instanceType;

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
     * @deprecated deprecated since version 2.0, Use withQuoteType() instead.
     *
     * @param string $quoteType
     *
     * @return $this
     */
    public function setquoteType($quoteType)
    {
        return $this->withQuoteType($quoteType);
    }

    /**
     * @param string $quoteType
     *
     * @return $this
     */
    public function withQuoteType($quoteType)
    {
        $this->data['QuoteType'] = $quoteType;
        $this->options['query']['quoteType'] = $quoteType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCreateEndTime() instead.
     *
     * @param string $createEndTime
     *
     * @return $this
     */
    public function setcreateEndTime($createEndTime)
    {
        return $this->withCreateEndTime($createEndTime);
    }

    /**
     * @param string $createEndTime
     *
     * @return $this
     */
    public function withCreateEndTime($createEndTime)
    {
        $this->data['CreateEndTime'] = $createEndTime;
        $this->options['query']['createEndTime'] = $createEndTime;

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
     * @deprecated deprecated since version 2.0, Use withUserCountryType() instead.
     *
     * @param string $userCountryType
     *
     * @return $this
     */
    public function setuserCountryType($userCountryType)
    {
        return $this->withUserCountryType($userCountryType);
    }

    /**
     * @param string $userCountryType
     *
     * @return $this
     */
    public function withUserCountryType($userCountryType)
    {
        $this->data['UserCountryType'] = $userCountryType;
        $this->options['query']['userCountryType'] = $userCountryType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOsType() instead.
     *
     * @param string $osType
     *
     * @return $this
     */
    public function setosType($osType)
    {
        return $this->withOsType($osType);
    }

    /**
     * @param string $osType
     *
     * @return $this
     */
    public function withOsType($osType)
    {
        $this->data['OsType'] = $osType;
        $this->options['query']['osType'] = $osType;

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
     * @deprecated deprecated since version 2.0, Use withCreateStartTime() instead.
     *
     * @param string $createStartTime
     *
     * @return $this
     */
    public function setcreateStartTime($createStartTime)
    {
        return $this->withCreateStartTime($createStartTime);
    }

    /**
     * @param string $createStartTime
     *
     * @return $this
     */
    public function withCreateStartTime($createStartTime)
    {
        $this->data['CreateStartTime'] = $createStartTime;
        $this->options['query']['createStartTime'] = $createStartTime;

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
     * @deprecated deprecated since version 2.0, Use withRegionNos() instead.
     *
     * @param string $regionNos
     *
     * @return $this
     */
    public function setregionNos($regionNos)
    {
        return $this->withRegionNos($regionNos);
    }

    /**
     * @param string $regionNos
     *
     * @return $this
     */
    public function withRegionNos($regionNos)
    {
        $this->data['RegionNos'] = $regionNos;
        $this->options['query']['regionNos'] = $regionNos;

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
     * @deprecated deprecated since version 2.0, Use withOsBit() instead.
     *
     * @param string $osBit
     *
     * @return $this
     */
    public function setosBit($osBit)
    {
        return $this->withOsBit($osBit);
    }

    /**
     * @param string $osBit
     *
     * @return $this
     */
    public function withOsBit($osBit)
    {
        $this->data['OsBit'] = $osBit;
        $this->options['query']['osBit'] = $osBit;

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
     * @deprecated deprecated since version 2.0, Use withImageIds() instead.
     *
     * @param string $imageIds
     *
     * @return $this
     */
    public function setimageIds($imageIds)
    {
        return $this->withImageIds($imageIds);
    }

    /**
     * @param string $imageIds
     *
     * @return $this
     */
    public function withImageIds($imageIds)
    {
        $this->data['ImageIds'] = $imageIds;
        $this->options['query']['imageIds'] = $imageIds;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStatus() instead.
     *
     * @param string $status
     *
     * @return $this
     */
    public function setstatus($status)
    {
        return $this->withStatus($status);
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function withStatus($status)
    {
        $this->data['Status'] = $status;
        $this->options['query']['status'] = $status;

        return $this;
    }
}
