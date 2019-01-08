<?php

namespace AlibabaCloud\Domain\V20180208;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ReserveDomain
 *
 * @method array getChannels()
 * @method string getDomainName()
 */
class ReserveDomain extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Domain';

    /**
     * @var string
     */
    public $version = '2018-02-08';

    /**
     * @var string
     */
    public $action = 'ReserveDomain';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param array $channels
     *
     * @return $this
     */
    public function withChannels(array $channels)
    {
        $this->data['Channels'] = $channels;
        foreach ($channels as $i => $iValue) {
            $this->options['query']['Channels.' . ($i + 1)] = $iValue;
        }

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
}
