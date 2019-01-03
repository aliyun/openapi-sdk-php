<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyTask
 *
 * @method string getCaller()
 * @method string getAddress()
 * @method string getIspCity()
 * @method string getAlertIds()
 * @method string getOptions()
 * @method string getTaskName()
 * @method string getInterval()
 * @method string getAlertRule()
 * @method string getTaskId()
 */
class ModifyTask extends RpcRequest
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
    public $action = 'ModifyTask';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withCaller() instead.
     *
     * @param string $caller
     *
     * @return $this
     */
    public function setcaller($caller)
    {
        return $this->withCaller($caller);
    }

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
     * @deprecated deprecated since version 2.0, Use withAddress() instead.
     *
     * @param string $address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        return $this->withAddress($address);
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
     * @deprecated deprecated since version 2.0, Use withIspCity() instead.
     *
     * @param string $ispCity
     *
     * @return $this
     */
    public function setIspCity($ispCity)
    {
        return $this->withIspCity($ispCity);
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
     * @deprecated deprecated since version 2.0, Use withAlertIds() instead.
     *
     * @param string $alertIds
     *
     * @return $this
     */
    public function setAlertIds($alertIds)
    {
        return $this->withAlertIds($alertIds);
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
     * @deprecated deprecated since version 2.0, Use withOptions() instead.
     *
     * @param string $options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        return $this->withOptions($options);
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
     * @deprecated deprecated since version 2.0, Use withTaskName() instead.
     *
     * @param string $taskName
     *
     * @return $this
     */
    public function setTaskName($taskName)
    {
        return $this->withTaskName($taskName);
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
     * @deprecated deprecated since version 2.0, Use withInterval() instead.
     *
     * @param string $interval
     *
     * @return $this
     */
    public function setInterval($interval)
    {
        return $this->withInterval($interval);
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
     * @deprecated deprecated since version 2.0, Use withAlertRule() instead.
     *
     * @param string $alertRule
     *
     * @return $this
     */
    public function setAlertRule($alertRule)
    {
        return $this->withAlertRule($alertRule);
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

    /**
     * @deprecated deprecated since version 2.0, Use withTaskId() instead.
     *
     * @param string $taskId
     *
     * @return $this
     */
    public function setTaskId($taskId)
    {
        return $this->withTaskId($taskId);
    }

    /**
     * @param string $taskId
     *
     * @return $this
     */
    public function withTaskId($taskId)
    {
        $this->data['TaskId'] = $taskId;
        $this->options['query']['TaskId'] = $taskId;

        return $this;
    }
}
