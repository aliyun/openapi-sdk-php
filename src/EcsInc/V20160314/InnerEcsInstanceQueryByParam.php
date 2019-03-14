<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * Api InnerEcsInstanceQueryByParam
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
class InnerEcsInstanceQueryByParam extends Rpc
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
