<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method string getStartOfInternetTx()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIzNo()
 * @method string getInternetIp()
 * @method string getChannel()
 * @method string getVpcInstanceId()
 * @method string getNetworkType()
 * @method string getNotSyncHouyi()
 * @method string getOperator()
 * @method string getHostname()
 * @method string getZoneNo()
 * @method string getCores()
 * @method string getMem()
 * @method string getBizStatus()
 * @method string getPageSize()
 * @method string getAliUid()
 * @method string getVSwitchInstanceId()
 * @method string getProxyId()
 * @method string getOrder()
 * @method string getSystemDeviceCategory()
 * @method string getAgentId()
 * @method string getImageType()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndOfInternetTx()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToken()
 * @method string getRegionNo()
 * @method string getInstanceIds()
 * @method string getPageNo()
 * @method string getImageIndexId()
 * @method string getBid()
 * @method string getIzId()
 * @method string getStatus()
 * @method string getIntranetIp()
 * @method string getOrderType()
 */
class InnerInstanceQueryByParam extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

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
     * @param string $vSwitchInstanceId
     *
     * @return $this
     */
    public function withVSwitchInstanceId($vSwitchInstanceId)
    {
        $this->data['VSwitchInstanceId'] = $vSwitchInstanceId;
        $this->options['query']['vSwitchInstanceId'] = $vSwitchInstanceId;

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
     * @param string $imageIndexId
     *
     * @return $this
     */
    public function withImageIndexId($imageIndexId)
    {
        $this->data['ImageIndexId'] = $imageIndexId;
        $this->options['query']['imageIndexId'] = $imageIndexId;

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
