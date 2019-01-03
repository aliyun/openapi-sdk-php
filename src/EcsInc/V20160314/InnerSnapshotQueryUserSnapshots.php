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
     * @deprecated deprecated since version 2.0, Use withEcsIds() instead.
     *
     * @param string $ecsIds
     *
     * @return $this
     */
    public function setecsIds($ecsIds)
    {
        return $this->withEcsIds($ecsIds);
    }

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
     * @deprecated deprecated since version 2.0, Use withSnapshotNickName() instead.
     *
     * @param string $snapshotNickName
     *
     * @return $this
     */
    public function setsnapshotNickName($snapshotNickName)
    {
        return $this->withSnapshotNickName($snapshotNickName);
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
     * @deprecated deprecated since version 2.0, Use withAliUids() instead.
     *
     * @param string $aliUids
     *
     * @return $this
     */
    public function setaliUids($aliUids)
    {
        return $this->withAliUids($aliUids);
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
     * @deprecated deprecated since version 2.0, Use withSnapshotIds() instead.
     *
     * @param string $snapshotIds
     *
     * @return $this
     */
    public function setsnapshotIds($snapshotIds)
    {
        return $this->withSnapshotIds($snapshotIds);
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
     * @deprecated deprecated since version 2.0, Use withDeviceNo() instead.
     *
     * @param string $deviceNo
     *
     * @return $this
     */
    public function setdeviceNo($deviceNo)
    {
        return $this->withDeviceNo($deviceNo);
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
     * @deprecated deprecated since version 2.0, Use withDeviceType() instead.
     *
     * @param string $deviceType
     *
     * @return $this
     */
    public function setdeviceType($deviceType)
    {
        return $this->withDeviceType($deviceType);
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
     * @deprecated deprecated since version 2.0, Use withGmtCreatedBegin() instead.
     *
     * @param string $gmtCreatedBegin
     *
     * @return $this
     */
    public function setgmtCreatedBegin($gmtCreatedBegin)
    {
        return $this->withGmtCreatedBegin($gmtCreatedBegin);
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
     * @deprecated deprecated since version 2.0, Use withEcsSnapshotStatus() instead.
     *
     * @param string $ecsSnapshotStatus
     *
     * @return $this
     */
    public function setecsSnapshotStatus($ecsSnapshotStatus)
    {
        return $this->withEcsSnapshotStatus($ecsSnapshotStatus);
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
     * @deprecated deprecated since version 2.0, Use withCreateFinished() instead.
     *
     * @param string $createFinished
     *
     * @return $this
     */
    public function setcreateFinished($createFinished)
    {
        return $this->withCreateFinished($createFinished);
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
     * @deprecated deprecated since version 2.0, Use withFuzzySnapshotName() instead.
     *
     * @param string $fuzzySnapshotName
     *
     * @return $this
     */
    public function setfuzzySnapshotName($fuzzySnapshotName)
    {
        return $this->withFuzzySnapshotName($fuzzySnapshotName);
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
     * @deprecated deprecated since version 2.0, Use withDiskId() instead.
     *
     * @param string $diskId
     *
     * @return $this
     */
    public function setdiskId($diskId)
    {
        return $this->withDiskId($diskId);
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
     * @deprecated deprecated since version 2.0, Use withEcsSnapshotTypes() instead.
     *
     * @param string $ecsSnapshotTypes
     *
     * @return $this
     */
    public function setecsSnapshotTypes($ecsSnapshotTypes)
    {
        return $this->withEcsSnapshotTypes($ecsSnapshotTypes);
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
     * @deprecated deprecated since version 2.0, Use withGmtCreatedEnd() instead.
     *
     * @param string $gmtCreatedEnd
     *
     * @return $this
     */
    public function setgmtCreatedEnd($gmtCreatedEnd)
    {
        return $this->withGmtCreatedEnd($gmtCreatedEnd);
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
     * @deprecated deprecated since version 2.0, Use withExcludeSnapshotIds() instead.
     *
     * @param string $excludeSnapshotIds
     *
     * @return $this
     */
    public function setexcludeSnapshotIds($excludeSnapshotIds)
    {
        return $this->withExcludeSnapshotIds($excludeSnapshotIds);
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
     * @deprecated deprecated since version 2.0, Use withDiskType() instead.
     *
     * @param string $diskType
     *
     * @return $this
     */
    public function setdiskType($diskType)
    {
        return $this->withDiskType($diskType);
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
     * @deprecated deprecated since version 2.0, Use withRegionIndexId() instead.
     *
     * @param string $regionIndexId
     *
     * @return $this
     */
    public function setregionIndexId($regionIndexId)
    {
        return $this->withRegionIndexId($regionIndexId);
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
     * @deprecated deprecated since version 2.0, Use withSnapshotSizeLowLimit() instead.
     *
     * @param string $snapshotSizeLowLimit
     *
     * @return $this
     */
    public function setsnapshotSizeLowLimit($snapshotSizeLowLimit)
    {
        return $this->withSnapshotSizeLowLimit($snapshotSizeLowLimit);
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
     * @deprecated deprecated since version 2.0, Use withIds() instead.
     *
     * @param string $ids
     *
     * @return $this
     */
    public function setids($ids)
    {
        return $this->withIds($ids);
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
     * @deprecated deprecated since version 2.0, Use withSnapshotSizeLimit() instead.
     *
     * @param string $snapshotSizeLimit
     *
     * @return $this
     */
    public function setsnapshotSizeLimit($snapshotSizeLimit)
    {
        return $this->withSnapshotSizeLimit($snapshotSizeLimit);
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
     * @deprecated deprecated since version 2.0, Use withIsSyncHouyi() instead.
     *
     * @param string $isSyncHouyi
     *
     * @return $this
     */
    public function setisSyncHouyi($isSyncHouyi)
    {
        return $this->withIsSyncHouyi($isSyncHouyi);
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
     * @deprecated deprecated since version 2.0, Use withSnapshotNos() instead.
     *
     * @param string $snapshotNos
     *
     * @return $this
     */
    public function setsnapshotNos($snapshotNos)
    {
        return $this->withSnapshotNos($snapshotNos);
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
