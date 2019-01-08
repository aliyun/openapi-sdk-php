<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InnerSnapshotQueryUserSnapshots
 *
 * @method string getEcsIds()
 * @method string getResourceOwnerId()
 * @method string getSnapshotNickName()
 * @method string getAliUids()
 * @method string getSnapshotIds()
 * @method string getChannel()
 * @method string getDeviceNo()
 * @method string getOperator()
 * @method string getDeviceType()
 * @method string getGmtCreatedBegin()
 * @method string getEcsSnapshotStatus()
 * @method string getCreateFinished()
 * @method string getFuzzySnapshotName()
 * @method string getPageSize()
 * @method string getDiskId()
 * @method string getEcsSnapshotTypes()
 * @method string getQuoteType()
 * @method string getGmtCreatedEnd()
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getExcludeSnapshotIds()
 * @method string getOwnerId()
 * @method string getDiskType()
 * @method string getRegionIndexId()
 * @method string getToken()
 * @method string getRegionNo()
 * @method string getPageNo()
 * @method string getSnapshotSizeLowLimit()
 * @method string getIds()
 * @method string getSnapshotSizeLimit()
 * @method string getIsSyncHouyi()
 * @method string getBid()
 * @method string getSnapshotNos()
 */
class InnerSnapshotQueryUserSnapshots extends RpcRequest
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
    public $action = 'InnerSnapshotQueryUserSnapshots';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ecs';

    /**
     * @param string $ecsIds
     *
     * @return $this
     */
    public function withEcsIds($ecsIds)
    {
        $this->data['EcsIds'] = $ecsIds;
        $this->options['query']['ecsIds'] = $ecsIds;

        return $this;
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
     * @param string $snapshotNickName
     *
     * @return $this
     */
    public function withSnapshotNickName($snapshotNickName)
    {
        $this->data['SnapshotNickName'] = $snapshotNickName;
        $this->options['query']['snapshotNickName'] = $snapshotNickName;

        return $this;
    }

    /**
     * @param string $aliUids
     *
     * @return $this
     */
    public function withAliUids($aliUids)
    {
        $this->data['AliUids'] = $aliUids;
        $this->options['query']['aliUids'] = $aliUids;

        return $this;
    }

    /**
     * @param string $snapshotIds
     *
     * @return $this
     */
    public function withSnapshotIds($snapshotIds)
    {
        $this->data['SnapshotIds'] = $snapshotIds;
        $this->options['query']['snapshotIds'] = $snapshotIds;

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
     * @param string $deviceNo
     *
     * @return $this
     */
    public function withDeviceNo($deviceNo)
    {
        $this->data['DeviceNo'] = $deviceNo;
        $this->options['query']['deviceNo'] = $deviceNo;

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
     * @param string $deviceType
     *
     * @return $this
     */
    public function withDeviceType($deviceType)
    {
        $this->data['DeviceType'] = $deviceType;
        $this->options['query']['deviceType'] = $deviceType;

        return $this;
    }

    /**
     * @param string $gmtCreatedBegin
     *
     * @return $this
     */
    public function withGmtCreatedBegin($gmtCreatedBegin)
    {
        $this->data['GmtCreatedBegin'] = $gmtCreatedBegin;
        $this->options['query']['gmtCreatedBegin'] = $gmtCreatedBegin;

        return $this;
    }

    /**
     * @param string $ecsSnapshotStatus
     *
     * @return $this
     */
    public function withEcsSnapshotStatus($ecsSnapshotStatus)
    {
        $this->data['EcsSnapshotStatus'] = $ecsSnapshotStatus;
        $this->options['query']['ecsSnapshotStatus'] = $ecsSnapshotStatus;

        return $this;
    }

    /**
     * @param string $createFinished
     *
     * @return $this
     */
    public function withCreateFinished($createFinished)
    {
        $this->data['CreateFinished'] = $createFinished;
        $this->options['query']['createFinished'] = $createFinished;

        return $this;
    }

    /**
     * @param string $fuzzySnapshotName
     *
     * @return $this
     */
    public function withFuzzySnapshotName($fuzzySnapshotName)
    {
        $this->data['FuzzySnapshotName'] = $fuzzySnapshotName;
        $this->options['query']['fuzzySnapshotName'] = $fuzzySnapshotName;

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
     * @param string $diskId
     *
     * @return $this
     */
    public function withDiskId($diskId)
    {
        $this->data['DiskId'] = $diskId;
        $this->options['query']['diskId'] = $diskId;

        return $this;
    }

    /**
     * @param string $ecsSnapshotTypes
     *
     * @return $this
     */
    public function withEcsSnapshotTypes($ecsSnapshotTypes)
    {
        $this->data['EcsSnapshotTypes'] = $ecsSnapshotTypes;
        $this->options['query']['ecsSnapshotTypes'] = $ecsSnapshotTypes;

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
     * @param string $gmtCreatedEnd
     *
     * @return $this
     */
    public function withGmtCreatedEnd($gmtCreatedEnd)
    {
        $this->data['GmtCreatedEnd'] = $gmtCreatedEnd;
        $this->options['query']['gmtCreatedEnd'] = $gmtCreatedEnd;

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
     * @param string $excludeSnapshotIds
     *
     * @return $this
     */
    public function withExcludeSnapshotIds($excludeSnapshotIds)
    {
        $this->data['ExcludeSnapshotIds'] = $excludeSnapshotIds;
        $this->options['query']['excludeSnapshotIds'] = $excludeSnapshotIds;

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
     * @param string $diskType
     *
     * @return $this
     */
    public function withDiskType($diskType)
    {
        $this->data['DiskType'] = $diskType;
        $this->options['query']['diskType'] = $diskType;

        return $this;
    }

    /**
     * @param string $regionIndexId
     *
     * @return $this
     */
    public function withRegionIndexId($regionIndexId)
    {
        $this->data['RegionIndexId'] = $regionIndexId;
        $this->options['query']['regionIndexId'] = $regionIndexId;

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
     * @param string $snapshotSizeLowLimit
     *
     * @return $this
     */
    public function withSnapshotSizeLowLimit($snapshotSizeLowLimit)
    {
        $this->data['SnapshotSizeLowLimit'] = $snapshotSizeLowLimit;
        $this->options['query']['snapshotSizeLowLimit'] = $snapshotSizeLowLimit;

        return $this;
    }

    /**
     * @param string $ids
     *
     * @return $this
     */
    public function withIds($ids)
    {
        $this->data['Ids'] = $ids;
        $this->options['query']['ids'] = $ids;

        return $this;
    }

    /**
     * @param string $snapshotSizeLimit
     *
     * @return $this
     */
    public function withSnapshotSizeLimit($snapshotSizeLimit)
    {
        $this->data['SnapshotSizeLimit'] = $snapshotSizeLimit;
        $this->options['query']['snapshotSizeLimit'] = $snapshotSizeLimit;

        return $this;
    }

    /**
     * @param string $isSyncHouyi
     *
     * @return $this
     */
    public function withIsSyncHouyi($isSyncHouyi)
    {
        $this->data['IsSyncHouyi'] = $isSyncHouyi;
        $this->options['query']['isSyncHouyi'] = $isSyncHouyi;

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
     * @param string $snapshotNos
     *
     * @return $this
     */
    public function withSnapshotNos($snapshotNos)
    {
        $this->data['SnapshotNos'] = $snapshotNos;
        $this->options['query']['snapshotNos'] = $snapshotNos;

        return $this;
    }
}
