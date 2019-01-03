<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyHttpHeaderConfig
 *
 * @method string getHeaderValue()
 * @method string getSecurityToken()
 * @method string getConfigID()
 * @method string getDomainName()
 * @method string getHeaderKey()
 * @method string getOwnerId()
 */
class ModifyHttpHeaderConfig extends RpcRequest
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
    public $action = 'ModifyHttpHeaderConfig';

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
     * @deprecated deprecated since version 2.0, Use withConfigID() instead.
     *
     * @param string $configID
     *
     * @return $this
     */
    public function setConfigID($configID)
    {
        return $this->withConfigID($configID);
    }

    /**
     * @param string $configID
     *
     * @return $this
     */
    public function withConfigID($configID)
    {
        $this->data['ConfigID'] = $configID;
        $this->options['query']['ConfigID'] = $configID;

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
