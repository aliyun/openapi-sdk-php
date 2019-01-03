<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetDynamicConfig
 *
 * @method string getDynamicOrigin()
 * @method string getStaticType()
 * @method string getSecurityToken()
 * @method string getStaticUri()
 * @method string getDomainName()
 * @method string getStaticPath()
 * @method string getDynamicCacheControl()
 * @method string getOwnerId()
 */
class SetDynamicConfig extends RpcRequest
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
    public $action = 'SetDynamicConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withDynamicOrigin() instead.
     *
     * @param string $dynamicOrigin
     *
     * @return $this
     */
    public function setDynamicOrigin($dynamicOrigin)
    {
        return $this->withDynamicOrigin($dynamicOrigin);
    }

    /**
     * @param string $dynamicOrigin
     *
     * @return $this
     */
    public function withDynamicOrigin($dynamicOrigin)
    {
        $this->data['DynamicOrigin'] = $dynamicOrigin;
        $this->options['query']['DynamicOrigin'] = $dynamicOrigin;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStaticType() instead.
     *
     * @param string $staticType
     *
     * @return $this
     */
    public function setStaticType($staticType)
    {
        return $this->withStaticType($staticType);
    }

    /**
     * @param string $staticType
     *
     * @return $this
     */
    public function withStaticType($staticType)
    {
        $this->data['StaticType'] = $staticType;
        $this->options['query']['StaticType'] = $staticType;

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
     * @deprecated deprecated since version 2.0, Use withStaticUri() instead.
     *
     * @param string $staticUri
     *
     * @return $this
     */
    public function setStaticUri($staticUri)
    {
        return $this->withStaticUri($staticUri);
    }

    /**
     * @param string $staticUri
     *
     * @return $this
     */
    public function withStaticUri($staticUri)
    {
        $this->data['StaticUri'] = $staticUri;
        $this->options['query']['StaticUri'] = $staticUri;

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
     * @deprecated deprecated since version 2.0, Use withStaticPath() instead.
     *
     * @param string $staticPath
     *
     * @return $this
     */
    public function setStaticPath($staticPath)
    {
        return $this->withStaticPath($staticPath);
    }

    /**
     * @param string $staticPath
     *
     * @return $this
     */
    public function withStaticPath($staticPath)
    {
        $this->data['StaticPath'] = $staticPath;
        $this->options['query']['StaticPath'] = $staticPath;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDynamicCacheControl() instead.
     *
     * @param string $dynamicCacheControl
     *
     * @return $this
     */
    public function setDynamicCacheControl($dynamicCacheControl)
    {
        return $this->withDynamicCacheControl($dynamicCacheControl);
    }

    /**
     * @param string $dynamicCacheControl
     *
     * @return $this
     */
    public function withDynamicCacheControl($dynamicCacheControl)
    {
        $this->data['DynamicCacheControl'] = $dynamicCacheControl;
        $this->options['query']['DynamicCacheControl'] = $dynamicCacheControl;

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
