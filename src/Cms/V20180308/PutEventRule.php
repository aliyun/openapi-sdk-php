<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of PutEventRule
 *
 * @method array getEventPattern()
 * @method string getGroupId()
 * @method string getName()
 * @method string getDescription()
 * @method string getEventType()
 * @method string getState()
 */
class PutEventRule extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cms';

    /**
     * @var string
     */
    public $version = '2018-03-08';

    /**
     * @var string
     */
    public $action = 'PutEventRule';

    /**
     * @var string
     */
    public $method = 'PUT';

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

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function withGroupId($groupId)
    {
        $this->data['GroupId'] = $groupId;
        $this->options['query']['GroupId'] = $groupId;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

        return $this;
    }

    /**
     * @param string $eventType
     *
     * @return $this
     */
    public function withEventType($eventType)
    {
        $this->data['EventType'] = $eventType;
        $this->options['query']['EventType'] = $eventType;

        return $this;
    }

    /**
     * @param string $state
     *
     * @return $this
     */
    public function withState($state)
    {
        $this->data['State'] = $state;
        $this->options['query']['State'] = $state;

        return $this;
    }
}
