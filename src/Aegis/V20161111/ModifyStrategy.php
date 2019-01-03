<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyStrategy
 *
 * @method string getRiskSubTypeName()
 * @method string getSourceIp()
 * @method string getCycleStartTime()
 * @method string getName()
 * @method string getCycleDays()
 * @method string getId()
 */
class ModifyStrategy extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'aegis';

    /**
     * @var string
     */
    public $version = '2016-11-11';

    /**
     * @var string
     */
    public $action = 'ModifyStrategy';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

    /**
     * @deprecated deprecated since version 2.0, Use withRiskSubTypeName() instead.
     *
     * @param string $riskSubTypeName
     *
     * @return $this
     */
    public function setRiskSubTypeName($riskSubTypeName)
    {
        return $this->withRiskSubTypeName($riskSubTypeName);
    }

    /**
     * @param string $riskSubTypeName
     *
     * @return $this
     */
    public function withRiskSubTypeName($riskSubTypeName)
    {
        $this->data['RiskSubTypeName'] = $riskSubTypeName;
        $this->options['query']['RiskSubTypeName'] = $riskSubTypeName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSourceIp() instead.
     *
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        return $this->withSourceIp($sourceIp);
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCycleStartTime() instead.
     *
     * @param string $cycleStartTime
     *
     * @return $this
     */
    public function setCycleStartTime($cycleStartTime)
    {
        return $this->withCycleStartTime($cycleStartTime);
    }

    /**
     * @param string $cycleStartTime
     *
     * @return $this
     */
    public function withCycleStartTime($cycleStartTime)
    {
        $this->data['CycleStartTime'] = $cycleStartTime;
        $this->options['query']['CycleStartTime'] = $cycleStartTime;

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
     * @deprecated deprecated since version 2.0, Use withCycleDays() instead.
     *
     * @param string $cycleDays
     *
     * @return $this
     */
    public function setCycleDays($cycleDays)
    {
        return $this->withCycleDays($cycleDays);
    }

    /**
     * @param string $cycleDays
     *
     * @return $this
     */
    public function withCycleDays($cycleDays)
    {
        $this->data['CycleDays'] = $cycleDays;
        $this->options['query']['CycleDays'] = $cycleDays;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withId() instead.
     *
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        return $this->withId($id);
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function withId($id)
    {
        $this->data['Id'] = $id;
        $this->options['query']['Id'] = $id;

        return $this;
    }
}
