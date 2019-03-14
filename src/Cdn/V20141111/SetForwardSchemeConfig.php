<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * Api SetForwardSchemeConfig
 *
 * @method string getSchemeOrigin()
 * @method string getSchemeOriginPort()
 * @method string getSecurityToken()
 * @method string getEnable()
 * @method string getDomainName()
 * @method string getOwnerId()
 */
class SetForwardSchemeConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';

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
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken'] = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

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
}
