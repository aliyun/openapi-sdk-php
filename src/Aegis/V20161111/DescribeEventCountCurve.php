<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api DescribeEventCountCurve
 *
 * @method string getTypes()
 * @method string getSourceIp()
 * @method string getVulEventLevels()
 * @method string getLastDays()
 * @method string getHealthEventLevels()
 * @method string getSuspiciousEventLevels()
 */
class DescribeEventCountCurve extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

    /**
     * @param string $types
     *
     * @return $this
     */
    public function withTypes($types)
    {
        $this->data['Types'] = $types;
        $this->options['query']['Types'] = $types;

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
     * @param string $vulEventLevels
     *
     * @return $this
     */
    public function withVulEventLevels($vulEventLevels)
    {
        $this->data['VulEventLevels'] = $vulEventLevels;
        $this->options['query']['VulEventLevels'] = $vulEventLevels;

        return $this;
    }

    /**
     * @param string $lastDays
     *
     * @return $this
     */
    public function withLastDays($lastDays)
    {
        $this->data['LastDays'] = $lastDays;
        $this->options['query']['LastDays'] = $lastDays;

        return $this;
    }

    /**
     * @param string $healthEventLevels
     *
     * @return $this
     */
    public function withHealthEventLevels($healthEventLevels)
    {
        $this->data['HealthEventLevels'] = $healthEventLevels;
        $this->options['query']['HealthEventLevels'] = $healthEventLevels;

        return $this;
    }

    /**
     * @param string $suspiciousEventLevels
     *
     * @return $this
     */
    public function withSuspiciousEventLevels($suspiciousEventLevels)
    {
        $this->data['SuspiciousEventLevels'] = $suspiciousEventLevels;
        $this->options['query']['SuspiciousEventLevels'] = $suspiciousEventLevels;

        return $this;
    }
}
