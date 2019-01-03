<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateSynchronizationJob
 *
 * @method string getPeriod()
 * @method string getDestRegion()
 * @method string getClientToken()
 * @method string getSynchronizationJobClass()
 * @method string getNetworkType()
 * @method string getOwnerId()
 * @method string getSourceRegion()
 * @method string getPayType()
 * @method string getUsedTime()
 * @method string getSourceEndpointInstanceType()
 * @method string getDestinationEndpointInstanceType()
 */
class CreateSynchronizationJob extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Dts';

    /**
     * @var string
     */
    public $version = '2016-08-01';

    /**
     * @var string
     */
    public $action = 'CreateSynchronizationJob';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withPeriod() instead.
     *
     * @param string $period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        return $this->withPeriod($period);
    }

    /**
     * @param string $period
     *
     * @return $this
     */
    public function withPeriod($period)
    {
        $this->data['Period'] = $period;
        $this->options['query']['Period'] = $period;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDestRegion() instead.
     *
     * @param string $destRegion
     *
     * @return $this
     */
    public function setDestRegion($destRegion)
    {
        return $this->withDestRegion($destRegion);
    }

    /**
     * @param string $destRegion
     *
     * @return $this
     */
    public function withDestRegion($destRegion)
    {
        $this->data['DestRegion'] = $destRegion;
        $this->options['query']['DestRegion'] = $destRegion;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withClientToken() instead.
     *
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        return $this->withClientToken($clientToken);
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSynchronizationJobClass() instead.
     *
     * @param string $synchronizationJobClass
     *
     * @return $this
     */
    public function setSynchronizationJobClass($synchronizationJobClass)
    {
        return $this->withSynchronizationJobClass($synchronizationJobClass);
    }

    /**
     * @param string $synchronizationJobClass
     *
     * @return $this
     */
    public function withSynchronizationJobClass($synchronizationJobClass)
    {
        $this->data['SynchronizationJobClass'] = $synchronizationJobClass;
        $this->options['query']['SynchronizationJobClass'] = $synchronizationJobClass;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNetworkType() instead.
     *
     * @param string $networkType
     *
     * @return $this
     */
    public function setnetworkType($networkType)
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
        $this->options['query']['networkType'] = $networkType;

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
     * @deprecated deprecated since version 2.0, Use withSourceRegion() instead.
     *
     * @param string $sourceRegion
     *
     * @return $this
     */
    public function setSourceRegion($sourceRegion)
    {
        return $this->withSourceRegion($sourceRegion);
    }

    /**
     * @param string $sourceRegion
     *
     * @return $this
     */
    public function withSourceRegion($sourceRegion)
    {
        $this->data['SourceRegion'] = $sourceRegion;
        $this->options['query']['SourceRegion'] = $sourceRegion;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPayType() instead.
     *
     * @param string $payType
     *
     * @return $this
     */
    public function setPayType($payType)
    {
        return $this->withPayType($payType);
    }

    /**
     * @param string $payType
     *
     * @return $this
     */
    public function withPayType($payType)
    {
        $this->data['PayType'] = $payType;
        $this->options['query']['PayType'] = $payType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUsedTime() instead.
     *
     * @param string $usedTime
     *
     * @return $this
     */
    public function setUsedTime($usedTime)
    {
        return $this->withUsedTime($usedTime);
    }

    /**
     * @param string $usedTime
     *
     * @return $this
     */
    public function withUsedTime($usedTime)
    {
        $this->data['UsedTime'] = $usedTime;
        $this->options['query']['UsedTime'] = $usedTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSourceEndpointInstanceType() instead.
     *
     * @param string $sourceEndpointInstanceType
     *
     * @return $this
     */
    public function setSourceEndpointInstanceType($sourceEndpointInstanceType)
    {
        return $this->withSourceEndpointInstanceType($sourceEndpointInstanceType);
    }

    /**
     * @param string $sourceEndpointInstanceType
     *
     * @return $this
     */
    public function withSourceEndpointInstanceType($sourceEndpointInstanceType)
    {
        $this->data['SourceEndpointInstanceType'] = $sourceEndpointInstanceType;
        $this->options['query']['SourceEndpoint.InstanceType'] = $sourceEndpointInstanceType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDestinationEndpointInstanceType() instead.
     *
     * @param string $destinationEndpointInstanceType
     *
     * @return $this
     */
    public function setDestinationEndpointInstanceType($destinationEndpointInstanceType)
    {
        return $this->withDestinationEndpointInstanceType($destinationEndpointInstanceType);
    }

    /**
     * @param string $destinationEndpointInstanceType
     *
     * @return $this
     */
    public function withDestinationEndpointInstanceType($destinationEndpointInstanceType)
    {
        $this->data['DestinationEndpointInstanceType'] = $destinationEndpointInstanceType;
        $this->options['query']['DestinationEndpoint.InstanceType'] = $destinationEndpointInstanceType;

        return $this;
    }
}
