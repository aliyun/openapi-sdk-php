<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method array getPrioritizedCallerArea()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getServiceTag()
 * @method array getSkillGroupId()
 * @method string getCount()
 * @method $this withCount($value)
 * @method string getCalleeNumber()
 * @method $this withCalleeNumber($value)
 */
class PickNumbersByTags extends Rpc
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
}
