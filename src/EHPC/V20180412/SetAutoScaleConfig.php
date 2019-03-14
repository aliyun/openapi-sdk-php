<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * Api SetAutoScaleConfig
 *
 * @method string getShrinkIdleTimes()
 * @method string getGrowTimeoutInMinutes()
 * @method string getClusterId()
 * @method string getEnableAutoGrow()
 * @method string getSpotPriceLimit()
 * @method string getEnableAutoShrink()
 * @method string getSpotStrategy()
 * @method string getMaxNodesInCluster()
 * @method string getExcludeNodes()
 * @method string getShrinkIntervalInMinutes()
 * @method array getQueues()
 * @method string getExtraNodesGrowRatio()
 * @method string getGrowIntervalInMinutes()
 * @method string getGrowRatio()
 */
class SetAutoScaleConfig extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';

    /**
     * @param string $shrinkIdleTimes
     *
     * @return $this
     */
    public function withShrinkIdleTimes($shrinkIdleTimes)
    {
        $this->data['ShrinkIdleTimes'] = $shrinkIdleTimes;
        $this->options['query']['ShrinkIdleTimes'] = $shrinkIdleTimes;

        return $this;
    }

    /**
     * @param string $growTimeoutInMinutes
     *
     * @return $this
     */
    public function withGrowTimeoutInMinutes($growTimeoutInMinutes)
    {
        $this->data['GrowTimeoutInMinutes'] = $growTimeoutInMinutes;
        $this->options['query']['GrowTimeoutInMinutes'] = $growTimeoutInMinutes;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function withClusterId($clusterId)
    {
        $this->data['ClusterId'] = $clusterId;
        $this->options['query']['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $enableAutoGrow
     *
     * @return $this
     */
    public function withEnableAutoGrow($enableAutoGrow)
    {
        $this->data['EnableAutoGrow'] = $enableAutoGrow;
        $this->options['query']['EnableAutoGrow'] = $enableAutoGrow;

        return $this;
    }

    /**
     * @param string $spotPriceLimit
     *
     * @return $this
     */
    public function withSpotPriceLimit($spotPriceLimit)
    {
        $this->data['SpotPriceLimit'] = $spotPriceLimit;
        $this->options['query']['SpotPriceLimit'] = $spotPriceLimit;

        return $this;
    }

    /**
     * @param string $enableAutoShrink
     *
     * @return $this
     */
    public function withEnableAutoShrink($enableAutoShrink)
    {
        $this->data['EnableAutoShrink'] = $enableAutoShrink;
        $this->options['query']['EnableAutoShrink'] = $enableAutoShrink;

        return $this;
    }

    /**
     * @param string $spotStrategy
     *
     * @return $this
     */
    public function withSpotStrategy($spotStrategy)
    {
        $this->data['SpotStrategy'] = $spotStrategy;
        $this->options['query']['SpotStrategy'] = $spotStrategy;

        return $this;
    }

    /**
     * @param string $maxNodesInCluster
     *
     * @return $this
     */
    public function withMaxNodesInCluster($maxNodesInCluster)
    {
        $this->data['MaxNodesInCluster'] = $maxNodesInCluster;
        $this->options['query']['MaxNodesInCluster'] = $maxNodesInCluster;

        return $this;
    }

    /**
     * @param string $excludeNodes
     *
     * @return $this
     */
    public function withExcludeNodes($excludeNodes)
    {
        $this->data['ExcludeNodes'] = $excludeNodes;
        $this->options['query']['ExcludeNodes'] = $excludeNodes;

        return $this;
    }

    /**
     * @param string $shrinkIntervalInMinutes
     *
     * @return $this
     */
    public function withShrinkIntervalInMinutes($shrinkIntervalInMinutes)
    {
        $this->data['ShrinkIntervalInMinutes'] = $shrinkIntervalInMinutes;
        $this->options['query']['ShrinkIntervalInMinutes'] = $shrinkIntervalInMinutes;

        return $this;
    }

    /**
     * @param array $queues
     *
     * @return $this
     */
    public function withQueues(array $queues)
    {
        $this->data['Queues'] = $queues;
        foreach ($queues as $i => $iValue) {
            $this->options['query']['Queues.' . ($i + 1) . '.SpotStrategy'] = $queues[$i]['SpotStrategy'];
            $this->options['query']['Queues.' . ($i + 1) . '.QueueName'] = $queues[$i]['QueueName'];
            foreach ($queues[$i]['InstanceTypess'] as $j => $jValue) {
                $this->options['query']['Queues.' . ($i + 1) . '.InstanceTypes.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['Queues.' . ($i + 1) . '.InstanceType'] = $queues[$i]['InstanceType'];
            $this->options['query']['Queues.' . ($i + 1) . '.EnableAutoGrow'] = $queues[$i]['EnableAutoGrow'];
            $this->options['query']['Queues.' . ($i + 1) . '.SpotPriceLimit'] = $queues[$i]['SpotPriceLimit'];
            $this->options['query']['Queues.' . ($i + 1) . '.EnableAutoShrink'] = $queues[$i]['EnableAutoShrink'];
        }

        return $this;
    }

    /**
     * @param string $extraNodesGrowRatio
     *
     * @return $this
     */
    public function withExtraNodesGrowRatio($extraNodesGrowRatio)
    {
        $this->data['ExtraNodesGrowRatio'] = $extraNodesGrowRatio;
        $this->options['query']['ExtraNodesGrowRatio'] = $extraNodesGrowRatio;

        return $this;
    }

    /**
     * @param string $growIntervalInMinutes
     *
     * @return $this
     */
    public function withGrowIntervalInMinutes($growIntervalInMinutes)
    {
        $this->data['GrowIntervalInMinutes'] = $growIntervalInMinutes;
        $this->options['query']['GrowIntervalInMinutes'] = $growIntervalInMinutes;

        return $this;
    }

    /**
     * @param string $growRatio
     *
     * @return $this
     */
    public function withGrowRatio($growRatio)
    {
        $this->data['GrowRatio'] = $growRatio;
        $this->options['query']['GrowRatio'] = $growRatio;

        return $this;
    }
}
