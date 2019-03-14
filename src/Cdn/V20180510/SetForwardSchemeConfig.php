<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Rpc;

/**
 * Api SetForwardSchemeConfig
 *
 * @method string getSchemeOriginPort()
 * @method string getEnable()
 * @method string getSchemeOrigin()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getConfigId()
 */
class SetForwardSchemeConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2018-05-10';

    public $method = 'POST';

    /**
     * @param string $schemeOriginPort
     *
     * @return $this
     */
    public function withSchemeOriginPort($schemeOriginPort)
    {
        $this->data['SchemeOriginPort'] = $schemeOriginPort;
        $this->options['query']['SchemeOriginPort'] = $schemeOriginPort;

        return $this;
    }

    /**
     * @param string $enable
     *
     * @return $this
     */
    public function withEnable($enable)
    {
        $this->data['Enable'] = $enable;
        $this->options['query']['Enable'] = $enable;

        return $this;
    }

    /**
     * @param string $schemeOrigin
     *
     * @return $this
     */
    public function withSchemeOrigin($schemeOrigin)
    {
        $this->data['SchemeOrigin'] = $schemeOrigin;
        $this->options['query']['SchemeOrigin'] = $schemeOrigin;

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
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $configId
     *
     * @return $this
     */
    public function withConfigId($configId)
    {
        $this->data['ConfigId'] = $configId;
        $this->options['query']['ConfigId'] = $configId;

        return $this;
    }
}
