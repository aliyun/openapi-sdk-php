<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeEventCountCurve
 *
 * @method string getTypes()
 * @method string getSourceIp()
 * @method string getVulEventLevels()
 * @method string getLastDays()
 * @method string getHealthEventLevels()
 * @method string getSuspiciousEventLevels()
 */
class DescribeEventCountCurve extends RpcRequest
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
    public $action = 'DescribeEventCountCurve';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

    /**
     * @deprecated deprecated since version 2.0, Use withTypes() instead.
     *
     * @param string $types
     *
     * @return $this
     */
    public function setTypes($types)
    {
        return $this->withTypes($types);
    }

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
     * @deprecated deprecated since version 2.0, Use withVulEventLevels() instead.
     *
     * @param string $vulEventLevels
     *
     * @return $this
     */
    public function setVulEventLevels($vulEventLevels)
    {
        return $this->withVulEventLevels($vulEventLevels);
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
     * @deprecated deprecated since version 2.0, Use withLastDays() instead.
     *
     * @param string $lastDays
     *
     * @return $this
     */
    public function setLastDays($lastDays)
    {
        return $this->withLastDays($lastDays);
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
     * @deprecated deprecated since version 2.0, Use withHealthEventLevels() instead.
     *
     * @param string $healthEventLevels
     *
     * @return $this
     */
    public function setHealthEventLevels($healthEventLevels)
    {
        return $this->withHealthEventLevels($healthEventLevels);
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
     * @deprecated deprecated since version 2.0, Use withSuspiciousEventLevels() instead.
     *
     * @param string $suspiciousEventLevels
     *
     * @return $this
     */
    public function setSuspiciousEventLevels($suspiciousEventLevels)
    {
        return $this->withSuspiciousEventLevels($suspiciousEventLevels);
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
