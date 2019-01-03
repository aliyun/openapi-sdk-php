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
     * @deprecated deprecated since version 2.0, Use withBizRegionId() instead.
     *
     * @param string $bizRegionId
     *
     * @return $this
     */
    public function setBizRegionId($bizRegionId)
    {
        return $this->withBizRegionId($bizRegionId);
    }

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
     * @deprecated deprecated since version 2.0, Use withNetworkType() instead.
     *
     * @param string $networkType
     *
     * @return $this
     */
    public function setNetworkType($networkType)
    {
        return $this->withNetworkType($networkType);
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
     * @deprecated deprecated since version 2.0, Use withStartTime() instead.
     *
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        return $this->withStartTime($startTime);
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
     * @deprecated deprecated since version 2.0, Use getTagValue() instead.
     *
     * @return array
     */
    public function getTagValues()
    {
        return $this->getTagValue();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagValue() instead.
     *
     * @param array $tagValues
     *
     * @return $this
     */
    public function setTagValues(array $tagValues)
    {
        return $this->withTagValue($tagValues);
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
     * @deprecated deprecated since version 2.0, Use withEndTime() instead.
     *
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        return $this->withEndTime($endTime);
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
     * @deprecated deprecated since version 2.0, Use getVSwitchId() instead.
     *
     * @return array
     */
    public function getVSwitchIds()
    {
        return $this->getVSwitchId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVSwitchId() instead.
     *
     * @param array $vSwitchIds
     *
     * @return $this
     */
    public function setVSwitchIds(array $vSwitchIds)
    {
        return $this->withVSwitchId($vSwitchIds);
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
     * @deprecated deprecated since version 2.0, Use withMetric() instead.
     *
     * @param string $metric
     *
     * @return $this
     */
    public function setMetric($metric)
    {
        return $this->withMetric($metric);
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
     * @deprecated deprecated since version 2.0, Use withTagKey() instead.
     *
     * @param string $tagKey
     *
     * @return $this
     */
    public function setTagKey($tagKey)
    {
        return $this->withTagKey($tagKey);
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
