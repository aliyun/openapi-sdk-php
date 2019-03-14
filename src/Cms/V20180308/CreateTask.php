<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * Api CreateTask
 *
 * @method string getCaller()
 * @method string getAddress()
 * @method string getTaskType()
 * @method string getIspCity()
 * @method string getAlertIds()
 * @method string getOptions()
 * @method string getTaskName()
 * @method string getInterval()
 * @method string getAlertRule()
 */
class CreateTask extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';

    /**
     * @param string $caller
     *
     * @return $this
     */
    public function withCaller($caller)
    {
        $this->data['Caller'] = $caller;
        $this->options['query']['caller'] = $caller;

        return $this;
    }

    /**
     * @param string $address
     *
     * @return $this
     */
    public function withAddress($address)
    {
        $this->data['Address'] = $address;
        $this->options['query']['Address'] = $address;

        return $this;
    }

    /**
     * @param string $taskType
     *
     * @return $this
     */
    public function withTaskType($taskType)
    {
        $this->data['TaskType'] = $taskType;
        $this->options['query']['TaskType'] = $taskType;

        return $this;
    }

    /**
     * @param string $ispCity
     *
     * @return $this
     */
    public function withIspCity($ispCity)
    {
        $this->data['IspCity'] = $ispCity;
        $this->options['query']['IspCity'] = $ispCity;

        return $this;
    }

    /**
     * @param string $alertIds
     *
     * @return $this
     */
    public function withAlertIds($alertIds)
    {
        $this->data['AlertIds'] = $alertIds;
        $this->options['query']['AlertIds'] = $alertIds;

        return $this;
    }

    /**
     * @param string $options
     *
     * @return $this
     */
    public function withOptions($options)
    {
        $this->data['Options'] = $options;
        $this->options['query']['Options'] = $options;

        return $this;
    }

    /**
     * @param string $taskName
     *
     * @return $this
     */
    public function withTaskName($taskName)
    {
        $this->data['TaskName'] = $taskName;
        $this->options['query']['TaskName'] = $taskName;

        return $this;
    }

    /**
     * @param string $interval
     *
     * @return $this
     */
    public function withInterval($interval)
    {
        $this->data['Interval'] = $interval;
        $this->options['query']['Interval'] = $interval;

        return $this;
    }

    /**
     * @param string $alertRule
     *
     * @return $this
     */
    public function withAlertRule($alertRule)
    {
        $this->data['AlertRule'] = $alertRule;
        $this->options['query']['AlertRule'] = $alertRule;

        return $this;
    }
}
