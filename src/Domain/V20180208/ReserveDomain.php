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
     * @deprecated deprecated since version 2.0, Use getChannels() instead.
     *
     * @return array
     */
    public function getChannelss()
    {
        return $this->getChannels();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withChannels() instead.
     *
     * @param array $channelss
     *
     * @return $this
     */
    public function setChannelss(array $channelss)
    {
        return $this->withChannels($channelss);
    }

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
}
