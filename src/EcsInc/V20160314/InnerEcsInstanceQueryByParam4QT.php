<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InnerEcsInstanceQueryByParam4QT
 *
 * @method string getResourceOwnerId()
 * @method string getIzNo()
 * @method string getImageId()
 * @method string getIsNeedDetail()
 * @method string getIoOptimized()
 * @method string getChannel()
 * @method string getVpcInstanceId()
 * @method string getOperator()
 * @method string getVswInstanceId()
 * @method string getInnerIps()
 * @method string getBizStatus()
 * @method string getDeviceAvailable()
 * @method string getPageSize()
 * @method string getInstanceType()
 * @method string getAliUid()
 * @method string getPublicIps()
 * @method string getProxyId()
 * @method string getPrivateIps()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getInstanceTypeFamily()
 * @method string getOwnerId()
 * @method string getToken()
 * @method string getTags()
 * @method string getEcsNetworkType()
 * @method string getAsync()
 * @method string getInstanceIds()
 * @method string getPageNo()
 * @method string getFuzzyInstanceName()
 * @method string getBid()
 * @method string getGroupNo()
 * @method string getStatus()
 */
class InnerEcsInstanceQueryByParam4QT extends RpcRequest
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
    public $action = 'InnerEcsInstanceQueryByParam4QT';

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
     * @deprecated deprecated since version 2.0, Use withIsNeedDetail() instead.
     *
     * @param string $isNeedDetail
     *
     * @return $this
     */
    public function setisNeedDetail($isNeedDetail)
    {
        return $this->withIsNeedDetail($isNeedDetail);
    }

    /**
     * @param string $isNeedDetail
     *
     * @return $this
     */
    public function withIsNeedDetail($isNeedDetail)
    {
        $this->data['IsNeedDetail'] = $isNeedDetail;
        $this->options['query']['isNeedDetail'] = $isNeedDetail;

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
     * @deprecated deprecated since version 2.0, Use withInnerIps() instead.
     *
     * @param string $innerIps
     *
     * @return $this
     */
    public function setinnerIps($innerIps)
    {
        return $this->withInnerIps($innerIps);
    }

    /**
     * @param string $innerIps
     *
     * @return $this
     */
    public function withInnerIps($innerIps)
    {
        $this->data['InnerIps'] = $innerIps;
        $this->options['query']['innerIps'] = $innerIps;

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
     * @deprecated deprecated since version 2.0, Use withDeviceAvailable() instead.
     *
     * @param string $deviceAvailable
     *
     * @return $this
     */
    public function setdeviceAvailable($deviceAvailable)
    {
        return $this->withDeviceAvailable($deviceAvailable);
    }

    /**
     * @param string $deviceAvailable
     *
     * @return $this
     */
    public function withDeviceAvailable($deviceAvailable)
    {
        $this->data['DeviceAvailable'] = $deviceAvailable;
        $this->options['query']['deviceAvailable'] = $deviceAvailable;

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
     * @deprecated deprecated since version 2.0, Use withPublicIps() instead.
     *
     * @param string $publicIps
     *
     * @return $this
     */
    public function setpublicIps($publicIps)
    {
        return $this->withPublicIps($publicIps);
    }

    /**
     * @param string $publicIps
     *
     * @return $this
     */
    public function withPublicIps($publicIps)
    {
        $this->data['PublicIps'] = $publicIps;
        $this->options['query']['publicIps'] = $publicIps;

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
     * @deprecated deprecated since version 2.0, Use withPrivateIps() instead.
     *
     * @param string $privateIps
     *
     * @return $this
     */
    public function setprivateIps($privateIps)
    {
        return $this->withPrivateIps($privateIps);
    }

    /**
     * @param string $privateIps
     *
     * @return $this
     */
    public function withPrivateIps($privateIps)
    {
        $this->data['PrivateIps'] = $privateIps;
        $this->options['query']['privateIps'] = $privateIps;

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
     * @deprecated deprecated since version 2.0, Use withInstanceTypeFamily() instead.
     *
     * @param string $instanceTypeFamily
     *
     * @return $this
     */
    public function setinstanceTypeFamily($instanceTypeFamily)
    {
        return $this->withInstanceTypeFamily($instanceTypeFamily);
    }

    /**
     * @param string $instanceTypeFamily
     *
     * @return $this
     */
    public function withInstanceTypeFamily($instanceTypeFamily)
    {
        $this->data['InstanceTypeFamily'] = $instanceTypeFamily;
        $this->options['query']['instanceTypeFamily'] = $instanceTypeFamily;

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
     * @deprecated deprecated since version 2.0, Use withFuzzyInstanceName() instead.
     *
     * @param string $fuzzyInstanceName
     *
     * @return $this
     */
    public function setfuzzyInstanceName($fuzzyInstanceName)
    {
        return $this->withFuzzyInstanceName($fuzzyInstanceName);
    }

    /**
     * @param string $fuzzyInstanceName
     *
     * @return $this
     */
    public function withFuzzyInstanceName($fuzzyInstanceName)
    {
        $this->data['FuzzyInstanceName'] = $fuzzyInstanceName;
        $this->options['query']['fuzzyInstanceName'] = $fuzzyInstanceName;

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
