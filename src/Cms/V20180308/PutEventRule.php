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
     * @deprecated deprecated since version 2.0, Use getEventPattern() instead.
     *
     * @return array
     */
    public function getEventPatterns()
    {
        return $this->getEventPattern();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEventPattern() instead.
     *
     * @param array $eventPatterns
     *
     * @return $this
     */
    public function setEventPatterns(array $eventPatterns)
    {
        return $this->withEventPattern($eventPatterns);
    }

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
     * @deprecated deprecated since version 2.0, Use withGroupId() instead.
     *
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        return $this->withGroupId($groupId);
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
     * @deprecated deprecated since version 2.0, Use withName() instead.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        return $this->withName($name);
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
     * @deprecated deprecated since version 2.0, Use withDescription() instead.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->withDescription($description);
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
     * @deprecated deprecated since version 2.0, Use withEventType() instead.
     *
     * @param string $eventType
     *
     * @return $this
     */
    public function setEventType($eventType)
    {
        return $this->withEventType($eventType);
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
     * @deprecated deprecated since version 2.0, Use withState() instead.
     *
     * @param string $state
     *
     * @return $this
     */
    public function setState($state)
    {
        return $this->withState($state);
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
