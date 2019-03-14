<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * Api SetDynamicConfig
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
class SetDynamicConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';

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
