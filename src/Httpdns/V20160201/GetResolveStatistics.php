<?php

namespace AlibabaCloud\Httpdns\V20160201;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetResolveStatistics
 *
 * @method string getGranularity()
 * @method string getProtocolName()
 * @method string getDomainName()
 * @method string getTimeSpan()
 */
class GetResolveStatistics extends RpcRequest
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
    public $action = 'GetResolveStatistics';

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
     * @deprecated deprecated since version 2.0, Use withProtocolName() instead.
     *
     * @param string $protocolName
     *
     * @return $this
     */
    public function setProtocolName($protocolName)
    {
        return $this->withProtocolName($protocolName);
    }

    /**
     * @param string $protocolName
     *
     * @return $this
     */
    public function withProtocolName($protocolName)
    {
        $this->data['ProtocolName'] = $protocolName;
        $this->options['query']['ProtocolName'] = $protocolName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDomainName() instead.
     *
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        return $this->withDomainName($domainName);
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function withDomainName($domainName)
    {
        $this->data['DomainName'] = $domainName;
        $this->options['query']['DomainName'] = $domainName;

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
