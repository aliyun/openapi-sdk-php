<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetErrorPageConfig
 *
 * @method string getPageType()
 * @method string getSecurityToken()
 * @method string getDomainName()
 * @method string getCustomPageUrl()
 * @method string getOwnerId()
 */
class SetErrorPageConfig extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cdn';

    /**
     * @var string
     */
    public $version = '2018-05-10';

    /**
     * @var string
     */
    public $action = 'SetErrorPageConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withPageType() instead.
     *
     * @param string $pageType
     *
     * @return $this
     */
    public function setPageType($pageType)
    {
        return $this->withPageType($pageType);
    }

    /**
     * @param string $pageType
     *
     * @return $this
     */
    public function withPageType($pageType)
    {
        $this->data['PageType'] = $pageType;
        $this->options['query']['PageType'] = $pageType;

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
     * @deprecated deprecated since version 2.0, Use withCustomPageUrl() instead.
     *
     * @param string $customPageUrl
     *
     * @return $this
     */
    public function setCustomPageUrl($customPageUrl)
    {
        return $this->withCustomPageUrl($customPageUrl);
    }

    /**
     * @param string $customPageUrl
     *
     * @return $this
     */
    public function withCustomPageUrl($customPageUrl)
    {
        $this->data['CustomPageUrl'] = $customPageUrl;
        $this->options['query']['CustomPageUrl'] = $customPageUrl;

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
