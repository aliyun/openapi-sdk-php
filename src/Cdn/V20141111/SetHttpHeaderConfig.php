<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetHttpHeaderConfig
 *
 * @method string getHeaderValue()
 * @method string getSecurityToken()
 * @method string getConfigId()
 * @method string getDomainName()
 * @method string getHeaderKey()
 * @method string getOwnerId()
 */
class SetHttpHeaderConfig extends RpcRequest
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
    public $action = 'SetHttpHeaderConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withHeaderValue() instead.
     *
     * @param string $headerValue
     *
     * @return $this
     */
    public function setHeaderValue($headerValue)
    {
        return $this->withHeaderValue($headerValue);
    }

    /**
     * @param string $headerValue
     *
     * @return $this
     */
    public function withHeaderValue($headerValue)
    {
        $this->data['HeaderValue'] = $headerValue;
        $this->options['query']['HeaderValue'] = $headerValue;

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
     * @deprecated deprecated since version 2.0, Use withConfigId() instead.
     *
     * @param string $configId
     *
     * @return $this
     */
    public function setConfigId($configId)
    {
        return $this->withConfigId($configId);
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
     * @deprecated deprecated since version 2.0, Use withHeaderKey() instead.
     *
     * @param string $headerKey
     *
     * @return $this
     */
    public function setHeaderKey($headerKey)
    {
        return $this->withHeaderKey($headerKey);
    }

    /**
     * @param string $headerKey
     *
     * @return $this
     */
    public function withHeaderKey($headerKey)
    {
        $this->data['HeaderKey'] = $headerKey;
        $this->options['query']['HeaderKey'] = $headerKey;

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
