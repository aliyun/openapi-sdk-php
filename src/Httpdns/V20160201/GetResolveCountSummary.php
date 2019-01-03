<?php

namespace AlibabaCloud\Httpdns\V20160201;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetResolveCountSummary
 *
 * @method string getGranularity()
 * @method string getTimeSpan()
 */
class GetResolveCountSummary extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Httpdns';

    /**
     * @var string
     */
    public $version = '2016-02-01';

    /**
     * @var string
     */
    public $action = 'GetResolveCountSummary';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withGranularity() instead.
     *
     * @param string $granularity
     *
     * @return $this
     */
    public function setGranularity($granularity)
    {
        return $this->withGranularity($granularity);
    }

    /**
     * @param string $granularity
     *
     * @return $this
     */
    public function withGranularity($granularity)
    {
        $this->data['Granularity'] = $granularity;
        $this->options['query']['Granularity'] = $granularity;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTimeSpan() instead.
     *
     * @param string $timeSpan
     *
     * @return $this
     */
    public function setTimeSpan($timeSpan)
    {
        return $this->withTimeSpan($timeSpan);
    }

    /**
     * @param string $timeSpan
     *
     * @return $this
     */
    public function withTimeSpan($timeSpan)
    {
        $this->data['TimeSpan'] = $timeSpan;
        $this->options['query']['TimeSpan'] = $timeSpan;

        return $this;
    }
}
