<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetForwardSchemeConfig
 *
 * @method string getSchemeOrigin()
 * @method string getSchemeOriginPort()
 * @method string getSecurityToken()
 * @method string getEnable()
 * @method string getDomainName()
 * @method string getOwnerId()
 */
class SetForwardSchemeConfig extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cdn';

    /**
     * @var string
     */
    public $version = '2014-11-11';

    /**
     * @var string
     */
    public $action = 'SetForwardSchemeConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withSchemeOrigin() instead.
     *
     * @param string $schemeOrigin
     *
     * @return $this
     */
    public function setSchemeOrigin($schemeOrigin)
    {
        return $this->withSchemeOrigin($schemeOrigin);
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
     * @deprecated deprecated since version 2.0, Use withSchemeOriginPort() instead.
     *
     * @param string $schemeOriginPort
     *
     * @return $this
     */
    public function setSchemeOriginPort($schemeOriginPort)
    {
        return $this->withSchemeOriginPort($schemeOriginPort);
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
     * @deprecated deprecated since version 2.0, Use withSecurityToken() instead.
     *
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        return $this->withSecurityToken($securityToken);
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
     * @deprecated deprecated since version 2.0, Use withEnable() instead.
     *
     * @param string $enable
     *
     * @return $this
     */
    public function setEnable($enable)
    {
        return $this->withEnable($enable);
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
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
