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
        $this->options['query']['bid'] = $bid;

        return $this;
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
