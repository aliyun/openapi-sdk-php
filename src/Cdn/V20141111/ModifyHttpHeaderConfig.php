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
