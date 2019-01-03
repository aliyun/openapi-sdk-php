<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InnerInstanceQueryByParamBackyard
 *
 * @method string getStartOfInternetTx()
 * @method string getEcsIds()
 * @method string getResourceOwnerId()
 * @method string getImageId()
 * @method string getInternetIp()
 * @method string getIzNo()
 * @method string getIoOptimized()
 * @method string getChannel()
 * @method string getVpcInstanceId()
 * @method string getImgPc()
 * @method string getNotSyncHouyi()
 * @method string getInstanceTypeId()
 * @method string getOperator()
 * @method string getVswInstanceId()
 * @method string getHostname()
 * @method string getCores()
 * @method string getZoneNo()
 * @method string getMem()
 * @method string getBizStatus()
 * @method string getPageSize()
 * @method string getAliUid()
 * @method string getExclusionEcsIds()
 * @method string getProxyId()
 * @method string getOrder()
 * @method string getSystemDeviceCategory()
 * @method string getImageType()
 * @method string getAgentId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getEndOfInternetTx()
 * @method string getOwnerId()
 * @method string getRegionIndexId()
 * @method string getToken()
 * @method string getEcsNetworkType()
 * @method string getRegionNo()
 * @method string getInstanceIds()
 * @method string getPageNo()
 * @method string getZoneId()
 * @method string getAppKey()
 * @method string getBid()
 * @method string getIzId()
 * @method string getIntranetIp()
 * @method string getStatus()
 * @method string getOrderType()
 */
class InnerInstanceQueryByParamBackyard extends RpcRequest
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
    public $action = 'InnerInstanceQueryByParamBackyard';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ecs';

    /**
     * @deprecated deprecated since version 2.0, Use withStartOfInternetTx() instead.
     *
     * @param string $startOfInternetTx
     *
     * @return $this
     */
    public function setstartOfInternetTx($startOfInternetTx)
    {
        return $this->withStartOfInternetTx($startOfInternetTx);
    }

    /**
     * @param string $startOfInternetTx
     *
     * @return $this
     */
    public function withStartOfInternetTx($startOfInternetTx)
    {
        $this->data['StartOfInternetTx'] = $startOfInternetTx;
        $this->options['query']['startOfInternetTx'] = $startOfInternetTx;

        return $this;
    }

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
     * @deprecated deprecated since version 2.0, Use withImageId() instead.
     *
     * @param string $imageId
     *
     * @return $this
     */
    public function setimageId($imageId)
    {
        return $this->withImageId($imageId);
    }

    /**
     * @param string $imageId
     *
     * @return $this
     */
    public function withImageId($imageId)
    {
        $this->data['ImageId'] = $imageId;
        $this->options['query']['imageId'] = $imageId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInternetIp() instead.
     *
     * @param string $internetIp
     *
     * @return $this
     */
    public function setinternetIp($internetIp)
    {
        return $this->withInternetIp($internetIp);
    }

    /**
     * @param string $internetIp
     *
     * @return $this
     */
    public function withInternetIp($internetIp)
    {
        $this->data['InternetIp'] = $internetIp;
        $this->options['query']['internetIp'] = $internetIp;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIzNo() instead.
     *
     * @param string $izNo
     *
     * @return $this
     */
    public function setizNo($izNo)
    {
        return $this->withIzNo($izNo);
    }

    /**
     * @param string $izNo
     *
     * @return $this
     */
    public function withIzNo($izNo)
    {
        $this->data['IzNo'] = $izNo;
        $this->options['query']['izNo'] = $izNo;

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
     * @deprecated deprecated since version 2.0, Use withImgPc() instead.
     *
     * @param string $imgPc
     *
     * @return $this
     */
    public function setimgPc($imgPc)
    {
        return $this->withImgPc($imgPc);
    }

    /**
     * @param string $imgPc
     *
     * @return $this
     */
    public function withImgPc($imgPc)
    {
        $this->data['ImgPc'] = $imgPc;
        $this->options['query']['imgPc'] = $imgPc;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNotSyncHouyi() instead.
     *
     * @param string $notSyncHouyi
     *
     * @return $this
     */
    public function setnotSyncHouyi($notSyncHouyi)
    {
        return $this->withNotSyncHouyi($notSyncHouyi);
    }

    /**
     * @param string $notSyncHouyi
     *
     * @return $this
     */
    public function withNotSyncHouyi($notSyncHouyi)
    {
        $this->data['NotSyncHouyi'] = $notSyncHouyi;
        $this->options['query']['notSyncHouyi'] = $notSyncHouyi;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceTypeId() instead.
     *
     * @param string $instanceTypeId
     *
     * @return $this
     */
    public function setinstanceTypeId($instanceTypeId)
    {
        return $this->withInstanceTypeId($instanceTypeId);
    }

    /**
     * @param string $instanceTypeId
     *
     * @return $this
     */
    public function withInstanceTypeId($instanceTypeId)
    {
        $this->data['InstanceTypeId'] = $instanceTypeId;
        $this->options['query']['instanceTypeId'] = $instanceTypeId;

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
     * @deprecated deprecated since version 2.0, Use withVswInstanceId() instead.
     *
     * @param string $vswInstanceId
     *
     * @return $this
     */
    public function setvswInstanceId($vswInstanceId)
    {
        return $this->withVswInstanceId($vswInstanceId);
    }

    /**
     * @param string $vswInstanceId
     *
     * @return $this
     */
    public function withVswInstanceId($vswInstanceId)
    {
        $this->data['VswInstanceId'] = $vswInstanceId;
        $this->options['query']['vswInstanceId'] = $vswInstanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withHostname() instead.
     *
     * @param string $hostname
     *
     * @return $this
     */
    public function sethostname($hostname)
    {
        return $this->withHostname($hostname);
    }

    /**
     * @param string $hostname
     *
     * @return $this
     */
    public function withHostname($hostname)
    {
        $this->data['Hostname'] = $hostname;
        $this->options['query']['hostname'] = $hostname;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCores() instead.
     *
     * @param string $cores
     *
     * @return $this
     */
    public function setcores($cores)
    {
        return $this->withCores($cores);
    }

    /**
     * @param string $cores
     *
     * @return $this
     */
    public function withCores($cores)
    {
        $this->data['Cores'] = $cores;
        $this->options['query']['cores'] = $cores;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withZoneNo() instead.
     *
     * @param string $zoneNo
     *
     * @return $this
     */
    public function setzoneNo($zoneNo)
    {
        return $this->withZoneNo($zoneNo);
    }

    /**
     * @param string $zoneNo
     *
     * @return $this
     */
    public function withZoneNo($zoneNo)
    {
        $this->data['ZoneNo'] = $zoneNo;
        $this->options['query']['zoneNo'] = $zoneNo;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMem() instead.
     *
     * @param string $mem
     *
     * @return $this
     */
    public function setmem($mem)
    {
        return $this->withMem($mem);
    }

    /**
     * @param string $mem
     *
     * @return $this
     */
    public function withMem($mem)
    {
        $this->data['Mem'] = $mem;
        $this->options['query']['mem'] = $mem;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withBizStatus() instead.
     *
     * @param string $bizStatus
     *
     * @return $this
     */
    public function setbizStatus($bizStatus)
    {
        return $this->withBizStatus($bizStatus);
    }

    /**
     * @param string $bizStatus
     *
     * @return $this
     */
    public function withBizStatus($bizStatus)
    {
        $this->data['BizStatus'] = $bizStatus;
        $this->options['query']['bizStatus'] = $bizStatus;

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
     * @deprecated deprecated since version 2.0, Use withExclusionEcsIds() instead.
     *
     * @param string $exclusionEcsIds
     *
     * @return $this
     */
    public function setexclusionEcsIds($exclusionEcsIds)
    {
        return $this->withExclusionEcsIds($exclusionEcsIds);
    }

    /**
     * @param string $exclusionEcsIds
     *
     * @return $this
     */
    public function withExclusionEcsIds($exclusionEcsIds)
    {
        $this->data['ExclusionEcsIds'] = $exclusionEcsIds;
        $this->options['query']['exclusionEcsIds'] = $exclusionEcsIds;

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
     * @deprecated deprecated since version 2.0, Use withOrder() instead.
     *
     * @param string $order
     *
     * @return $this
     */
    public function setorder($order)
    {
        return $this->withOrder($order);
    }

    /**
     * @param string $order
     *
     * @return $this
     */
    public function withOrder($order)
    {
        $this->data['Order'] = $order;
        $this->options['query']['order'] = $order;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSystemDeviceCategory() instead.
     *
     * @param string $systemDeviceCategory
     *
     * @return $this
     */
    public function setsystemDeviceCategory($systemDeviceCategory)
    {
        return $this->withSystemDeviceCategory($systemDeviceCategory);
    }

    /**
     * @param string $systemDeviceCategory
     *
     * @return $this
     */
    public function withSystemDeviceCategory($systemDeviceCategory)
    {
        $this->data['SystemDeviceCategory'] = $systemDeviceCategory;
        $this->options['query']['systemDeviceCategory'] = $systemDeviceCategory;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withImageType() instead.
     *
     * @param string $imageType
     *
     * @return $this
     */
    public function setimageType($imageType)
    {
        return $this->withImageType($imageType);
    }

    /**
     * @param string $imageType
     *
     * @return $this
     */
    public function withImageType($imageType)
    {
        $this->data['ImageType'] = $imageType;
        $this->options['query']['imageType'] = $imageType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAgentId() instead.
     *
     * @param string $agentId
     *
     * @return $this
     */
    public function setagentId($agentId)
    {
        return $this->withAgentId($agentId);
    }

    /**
     * @param string $agentId
     *
     * @return $this
     */
    public function withAgentId($agentId)
    {
        $this->data['AgentId'] = $agentId;
        $this->options['query']['agentId'] = $agentId;

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
     * @deprecated deprecated since version 2.0, Use withEndOfInternetTx() instead.
     *
     * @param string $endOfInternetTx
     *
     * @return $this
     */
    public function setendOfInternetTx($endOfInternetTx)
    {
        return $this->withEndOfInternetTx($endOfInternetTx);
    }

    /**
     * @param string $endOfInternetTx
     *
     * @return $this
     */
    public function withEndOfInternetTx($endOfInternetTx)
    {
        $this->data['EndOfInternetTx'] = $endOfInternetTx;
        $this->options['query']['endOfInternetTx'] = $endOfInternetTx;

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
     * @deprecated deprecated since version 2.0, Use withEcsNetworkType() instead.
     *
     * @param string $ecsNetworkType
     *
     * @return $this
     */
    public function setecsNetworkType($ecsNetworkType)
    {
        return $this->withEcsNetworkType($ecsNetworkType);
    }

    /**
     * @param string $ecsNetworkType
     *
     * @return $this
     */
    public function withEcsNetworkType($ecsNetworkType)
    {
        $this->data['EcsNetworkType'] = $ecsNetworkType;
        $this->options['query']['ecsNetworkType'] = $ecsNetworkType;

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
     * @deprecated deprecated since version 2.0, Use withInstanceIds() instead.
     *
     * @param string $instanceIds
     *
     * @return $this
     */
    public function setinstanceIds($instanceIds)
    {
        return $this->withInstanceIds($instanceIds);
    }

    /**
     * @param string $instanceIds
     *
     * @return $this
     */
    public function withInstanceIds($instanceIds)
    {
        $this->data['InstanceIds'] = $instanceIds;
        $this->options['query']['instanceIds'] = $instanceIds;

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
     * @deprecated deprecated since version 2.0, Use withZoneId() instead.
     *
     * @param string $zoneId
     *
     * @return $this
     */
    public function setzoneId($zoneId)
    {
        return $this->withZoneId($zoneId);
    }

    /**
     * @param string $zoneId
     *
     * @return $this
     */
    public function withZoneId($zoneId)
    {
        $this->data['ZoneId'] = $zoneId;
        $this->options['query']['zoneId'] = $zoneId;

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
     * @deprecated deprecated since version 2.0, Use withIzId() instead.
     *
     * @param string $izId
     *
     * @return $this
     */
    public function setizId($izId)
    {
        return $this->withIzId($izId);
    }

    /**
     * @param string $izId
     *
     * @return $this
     */
    public function withIzId($izId)
    {
        $this->data['IzId'] = $izId;
        $this->options['query']['izId'] = $izId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIntranetIp() instead.
     *
     * @param string $intranetIp
     *
     * @return $this
     */
    public function setintranetIp($intranetIp)
    {
        return $this->withIntranetIp($intranetIp);
    }

    /**
     * @param string $intranetIp
     *
     * @return $this
     */
    public function withIntranetIp($intranetIp)
    {
        $this->data['IntranetIp'] = $intranetIp;
        $this->options['query']['intranetIp'] = $intranetIp;

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

    /**
     * @deprecated deprecated since version 2.0, Use withOrderType() instead.
     *
     * @param string $orderType
     *
     * @return $this
     */
    public function setorderType($orderType)
    {
        return $this->withOrderType($orderType);
    }

    /**
     * @param string $orderType
     *
     * @return $this
     */
    public function withOrderType($orderType)
    {
        $this->data['OrderType'] = $orderType;
        $this->options['query']['orderType'] = $orderType;

        return $this;
    }
}
