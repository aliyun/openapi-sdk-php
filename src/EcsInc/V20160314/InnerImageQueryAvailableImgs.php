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
