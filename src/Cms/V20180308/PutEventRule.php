<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method array getEventPattern()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getState()
 * @method $this withState($value)
 */
class PutEventRule extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'PUT';

    public $serviceCode = 'cms';

    /**
     * @param array $eventPattern
     *
     * @return $this
     */
    public function withEventPattern(array $eventPattern)
    {
        $this->data['EventPattern'] = $eventPattern;
        foreach ($eventPattern as $i => $iValue) {
            foreach ($eventPattern[$i]['LevelLists'] as $j => $jValue) {
                $this->options['query']['EventPattern.' . ($i + 1) . '.LevelList.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['EventPattern.' . ($i + 1) . '.Product'] = $eventPattern[$i]['Product'];
            foreach ($eventPattern[$i]['StatusLists'] as $j => $jValue) {
                $this->options['query']['EventPattern.' . ($i + 1) . '.StatusList.' . ($j + 1)] = $jValue;
            }
            foreach ($eventPattern[$i]['NameLists'] as $j => $jValue) {
                $this->options['query']['EventPattern.' . ($i + 1) . '.NameList.' . ($j + 1)] = $jValue;
            }
            foreach ($eventPattern[$i]['EventTypeLists'] as $j => $jValue) {
                $this->options['query']['EventPattern.' . ($i + 1) . '.EventTypeList.' . ($j + 1)] = $jValue;
            }
        }

        return $this;
    }
}
