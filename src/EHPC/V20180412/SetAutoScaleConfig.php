<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * @method string getShrinkIdleTimes()
 * @method $this withShrinkIdleTimes($value)
 * @method string getGrowTimeoutInMinutes()
 * @method $this withGrowTimeoutInMinutes($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getEnableAutoGrow()
 * @method $this withEnableAutoGrow($value)
 * @method string getSpotPriceLimit()
 * @method $this withSpotPriceLimit($value)
 * @method string getEnableAutoShrink()
 * @method $this withEnableAutoShrink($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getMaxNodesInCluster()
 * @method $this withMaxNodesInCluster($value)
 * @method string getExcludeNodes()
 * @method $this withExcludeNodes($value)
 * @method string getShrinkIntervalInMinutes()
 * @method $this withShrinkIntervalInMinutes($value)
 * @method array getQueues()
 * @method string getExtraNodesGrowRatio()
 * @method $this withExtraNodesGrowRatio($value)
 * @method string getGrowIntervalInMinutes()
 * @method $this withGrowIntervalInMinutes($value)
 * @method string getGrowRatio()
 * @method $this withGrowRatio($value)
 */
class SetAutoScaleConfig extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';

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
}
