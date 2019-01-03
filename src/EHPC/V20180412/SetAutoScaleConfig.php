<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetAutoScaleConfig
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
class SetAutoScaleConfig extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EHPC';

    /**
     * @var string
     */
    public $version = '2018-04-12';

    /**
     * @var string
     */
    public $action = 'SetAutoScaleConfig';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @deprecated deprecated since version 2.0, Use withShrinkIdleTimes() instead.
     *
     * @param string $shrinkIdleTimes
     *
     * @return $this
     */
    public function setShrinkIdleTimes($shrinkIdleTimes)
    {
        return $this->withShrinkIdleTimes($shrinkIdleTimes);
    }

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
     * @deprecated deprecated since version 2.0, Use withGrowTimeoutInMinutes() instead.
     *
     * @param string $growTimeoutInMinutes
     *
     * @return $this
     */
    public function setGrowTimeoutInMinutes($growTimeoutInMinutes)
    {
        return $this->withGrowTimeoutInMinutes($growTimeoutInMinutes);
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
     * @deprecated deprecated since version 2.0, Use withClusterId() instead.
     *
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        return $this->withClusterId($clusterId);
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
     * @deprecated deprecated since version 2.0, Use withEnableAutoGrow() instead.
     *
     * @param string $enableAutoGrow
     *
     * @return $this
     */
    public function setEnableAutoGrow($enableAutoGrow)
    {
        return $this->withEnableAutoGrow($enableAutoGrow);
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
     * @deprecated deprecated since version 2.0, Use withSpotPriceLimit() instead.
     *
     * @param string $spotPriceLimit
     *
     * @return $this
     */
    public function setSpotPriceLimit($spotPriceLimit)
    {
        return $this->withSpotPriceLimit($spotPriceLimit);
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
     * @deprecated deprecated since version 2.0, Use withEnableAutoShrink() instead.
     *
     * @param string $enableAutoShrink
     *
     * @return $this
     */
    public function setEnableAutoShrink($enableAutoShrink)
    {
        return $this->withEnableAutoShrink($enableAutoShrink);
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
     * @deprecated deprecated since version 2.0, Use withSpotStrategy() instead.
     *
     * @param string $spotStrategy
     *
     * @return $this
     */
    public function setSpotStrategy($spotStrategy)
    {
        return $this->withSpotStrategy($spotStrategy);
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
     * @deprecated deprecated since version 2.0, Use withMaxNodesInCluster() instead.
     *
     * @param string $maxNodesInCluster
     *
     * @return $this
     */
    public function setMaxNodesInCluster($maxNodesInCluster)
    {
        return $this->withMaxNodesInCluster($maxNodesInCluster);
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
     * @deprecated deprecated since version 2.0, Use withExcludeNodes() instead.
     *
     * @param string $excludeNodes
     *
     * @return $this
     */
    public function setExcludeNodes($excludeNodes)
    {
        return $this->withExcludeNodes($excludeNodes);
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
     * @deprecated deprecated since version 2.0, Use withShrinkIntervalInMinutes() instead.
     *
     * @param string $shrinkIntervalInMinutes
     *
     * @return $this
     */
    public function setShrinkIntervalInMinutes($shrinkIntervalInMinutes)
    {
        return $this->withShrinkIntervalInMinutes($shrinkIntervalInMinutes);
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
     * @deprecated deprecated since version 2.0, Use getQueues() instead.
     *
     * @return array
     */
    public function getQueuess()
    {
        return $this->getQueues();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withQueues() instead.
     *
     * @param array $queuess
     *
     * @return $this
     */
    public function setQueuess(array $queuess)
    {
        return $this->withQueues($queuess);
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
            $this->options['query']['Queues.' . ($i + 1) . '.InstanceType'] = $queues[$i]['InstanceType'];
            $this->options['query']['Queues.' . ($i + 1) . '.EnableAutoGrow'] = $queues[$i]['EnableAutoGrow'];
            $this->options['query']['Queues.' . ($i + 1) . '.SpotPriceLimit'] = $queues[$i]['SpotPriceLimit'];
            $this->options['query']['Queues.' . ($i + 1) . '.EnableAutoShrink'] = $queues[$i]['EnableAutoShrink'];
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withExtraNodesGrowRatio() instead.
     *
     * @param string $extraNodesGrowRatio
     *
     * @return $this
     */
    public function setExtraNodesGrowRatio($extraNodesGrowRatio)
    {
        return $this->withExtraNodesGrowRatio($extraNodesGrowRatio);
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
     * @deprecated deprecated since version 2.0, Use withGrowIntervalInMinutes() instead.
     *
     * @param string $growIntervalInMinutes
     *
     * @return $this
     */
    public function setGrowIntervalInMinutes($growIntervalInMinutes)
    {
        return $this->withGrowIntervalInMinutes($growIntervalInMinutes);
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
     * @deprecated deprecated since version 2.0, Use withGrowRatio() instead.
     *
     * @param string $growRatio
     *
     * @return $this
     */
    public function setGrowRatio($growRatio)
    {
        return $this->withGrowRatio($growRatio);
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
