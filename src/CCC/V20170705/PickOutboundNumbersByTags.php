<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api PickOutboundNumbersByTags
 *
 * @method array getPrioritizedCallerArea()
 * @method string getInstanceId()
 * @method array getServiceTag()
 * @method array getSkillGroupId()
 * @method string getCount()
 * @method string getCalleeNumber()
 */
class PickOutboundNumbersByTags extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';

    /**
     * @param array $prioritizedCallerArea
     *
     * @return $this
     */
    public function withPrioritizedCallerArea(array $prioritizedCallerArea)
    {
        $this->data['PrioritizedCallerArea'] = $prioritizedCallerArea;
        foreach ($prioritizedCallerArea as $i => $iValue) {
            $this->options['query']['PrioritizedCallerArea.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param array $serviceTag
     *
     * @return $this
     */
    public function withServiceTag(array $serviceTag)
    {
        $this->data['ServiceTag'] = $serviceTag;
        foreach ($serviceTag as $i => $iValue) {
            $this->options['query']['ServiceTag.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $skillGroupId
     *
     * @return $this
     */
    public function withSkillGroupId(array $skillGroupId)
    {
        $this->data['SkillGroupId'] = $skillGroupId;
        foreach ($skillGroupId as $i => $iValue) {
            $this->options['query']['SkillGroupId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $count
     *
     * @return $this
     */
    public function withCount($count)
    {
        $this->data['Count'] = $count;
        $this->options['query']['Count'] = $count;

        return $this;
    }

    /**
     * @param string $calleeNumber
     *
     * @return $this
     */
    public function withCalleeNumber($calleeNumber)
    {
        $this->data['CalleeNumber'] = $calleeNumber;
        $this->options['query']['CalleeNumber'] = $calleeNumber;

        return $this;
    }
}
