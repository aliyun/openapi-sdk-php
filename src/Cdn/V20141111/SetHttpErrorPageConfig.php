<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetHttpErrorPageConfig
 *
 * @method string getSecurityToken()
 * @method string getDomainName()
 * @method string getPageUrl()
 * @method string getOwnerId()
 * @method string getErrorCode()
 */
class SetHttpErrorPageConfig extends RpcRequest
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
    public $action = 'SetHttpErrorPageConfig';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withPageUrl() instead.
     *
     * @param string $pageUrl
     *
     * @return $this
     */
    public function setPageUrl($pageUrl)
    {
        return $this->withPageUrl($pageUrl);
    }

    /**
     * @param string $pageUrl
     *
     * @return $this
     */
    public function withPageUrl($pageUrl)
    {
        $this->data['PageUrl'] = $pageUrl;
        $this->options['query']['PageUrl'] = $pageUrl;

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

    /**
     * @deprecated deprecated since version 2.0, Use withErrorCode() instead.
     *
     * @param string $errorCode
     *
     * @return $this
     */
    public function setErrorCode($errorCode)
    {
        return $this->withErrorCode($errorCode);
    }

    /**
     * @param string $errorCode
     *
     * @return $this
     */
    public function withErrorCode($errorCode)
    {
        $this->data['ErrorCode'] = $errorCode;
        $this->options['query']['ErrorCode'] = $errorCode;

        return $this;
    }
}
