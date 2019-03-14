<?php

namespace AlibabaCloud\Httpdns\V20160201;

use AlibabaCloud\Rpc;

/**
 * Api GetResolveStatistics
 *
 * @method string getGranularity()
 * @method string getProtocolName()
 * @method string getDomainName()
 * @method string getTimeSpan()
 */
class GetResolveStatistics extends Rpc
{
    public $product = 'Httpdns';

    public $version = '2016-02-01';

    public $method = 'POST';

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
