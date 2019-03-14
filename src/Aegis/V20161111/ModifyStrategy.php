<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api ModifyStrategy
 *
 * @method string getRiskSubTypeName()
 * @method string getSourceIp()
 * @method string getCycleStartTime()
 * @method string getName()
 * @method string getCycleDays()
 * @method string getId()
 */
class ModifyStrategy extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

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
