<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InnerQueryEcsCountByCondition
 *
 * @method string getBizRegionId()
 * @method string getResourceOwnerId()
 * @method string getNetworkType()
 * @method string getStartTime()
 * @method array getTagValue()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getEndTime()
 * @method string getOwnerId()
 * @method array getVSwitchId()
 * @method string getMetric()
 * @method string getTagKey()
 */
class InnerQueryEcsCountByCondition extends RpcRequest
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
    public $action = 'InnerQueryEcsCountByCondition';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ecs';

    /**
     * @param string $bizRegionId
     *
     * @return $this
     */
    public function withBizRegionId($bizRegionId)
    {
        $this->data['BizRegionId'] = $bizRegionId;
        $this->options['query']['BizRegionId'] = $bizRegionId;

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
     * @param string $networkType
     *
     * @return $this
     */
    public function withNetworkType($networkType)
    {
        $this->data['NetworkType'] = $networkType;
        $this->options['query']['NetworkType'] = $networkType;

        return $this;
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function withStartTime($startTime)
    {
        $this->data['StartTime'] = $startTime;
        $this->options['query']['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @param array $tagValue
     *
     * @return $this
     */
    public function withTagValue(array $tagValue)
    {
        $this->data['TagValue'] = $tagValue;
        foreach ($tagValue as $i => $iValue) {
            $this->options['query']['TagValue.' . ($i + 1)] = $iValue;
        }

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
     * @param string $endTime
     *
     * @return $this
     */
    public function withEndTime($endTime)
    {
        $this->data['EndTime'] = $endTime;
        $this->options['query']['EndTime'] = $endTime;

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
     * @param array $vSwitchId
     *
     * @return $this
     */
    public function withVSwitchId(array $vSwitchId)
    {
        $this->data['VSwitchId'] = $vSwitchId;
        foreach ($vSwitchId as $i => $iValue) {
            $this->options['query']['VSwitchId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $metric
     *
     * @return $this
     */
    public function withMetric($metric)
    {
        $this->data['Metric'] = $metric;
        $this->options['query']['Metric'] = $metric;

        return $this;
    }

    /**
     * @param string $tagKey
     *
     * @return $this
     */
    public function withTagKey($tagKey)
    {
        $this->data['TagKey'] = $tagKey;
        $this->options['query']['TagKey'] = $tagKey;

        return $this;
    }
}
