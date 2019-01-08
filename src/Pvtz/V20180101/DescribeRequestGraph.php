<?php

namespace AlibabaCloud\Pvtz\V20180101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeRequestGraph
 *
 * @method string getVpcId()
 * @method string getUserClientIp()
 * @method string getZoneId()
 * @method string getLang()
 * @method string getStartTimestamp()
 * @method string getEndTimestamp()
 */
class DescribeRequestGraph extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'pvtz';

    /**
     * @var string
     */
    public $version = '2018-01-01';

    /**
     * @var string
     */
    public $action = 'DescribeRequestGraph';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'pvtz';

    /**
     * @param string $vpcId
     *
     * @return $this
     */
    public function withVpcId($vpcId)
    {
        $this->data['VpcId'] = $vpcId;
        $this->options['query']['VpcId'] = $vpcId;

        return $this;
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function withUserClientIp($userClientIp)
    {
        $this->data['UserClientIp'] = $userClientIp;
        $this->options['query']['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @param string $zoneId
     *
     * @return $this
     */
    public function withZoneId($zoneId)
    {
        $this->data['ZoneId'] = $zoneId;
        $this->options['query']['ZoneId'] = $zoneId;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function withLang($lang)
    {
        $this->data['Lang'] = $lang;
        $this->options['query']['Lang'] = $lang;

        return $this;
    }

    /**
     * @param string $startTimestamp
     *
     * @return $this
     */
    public function withStartTimestamp($startTimestamp)
    {
        $this->data['StartTimestamp'] = $startTimestamp;
        $this->options['query']['StartTimestamp'] = $startTimestamp;

        return $this;
    }

    /**
     * @param string $endTimestamp
     *
     * @return $this
     */
    public function withEndTimestamp($endTimestamp)
    {
        $this->data['EndTimestamp'] = $endTimestamp;
        $this->options['query']['EndTimestamp'] = $endTimestamp;

        return $this;
    }
}
