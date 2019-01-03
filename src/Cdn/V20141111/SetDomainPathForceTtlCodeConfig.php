<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetDomainPathForceTtlCodeConfig
 *
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getVersion()
 * @method string getCodeString()
 * @method string getPath()
 * @method string getSecurityToken()
 */
class SetDomainPathForceTtlCodeConfig extends RpcRequest
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
    public $action = 'SetDomainPathForceTtlCodeConfig';

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

    /**
     * @deprecated deprecated since version 2.0, Use withVersion() instead.
     *
     * @param string $version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        return $this->withVersion($version);
    }

    /**
     * @param string $version
     *
     * @return $this
     */
    public function withVersion($version)
    {
        $this->data['Version'] = $version;
        $this->options['query']['Version'] = $version;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCodeString() instead.
     *
     * @param string $codeString
     *
     * @return $this
     */
    public function setCodeString($codeString)
    {
        return $this->withCodeString($codeString);
    }

    /**
     * @param string $codeString
     *
     * @return $this
     */
    public function withCodeString($codeString)
    {
        $this->data['CodeString'] = $codeString;
        $this->options['query']['CodeString'] = $codeString;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPath() instead.
     *
     * @param string $path
     *
     * @return $this
     */
    public function setPath($path)
    {
        return $this->withPath($path);
    }

    /**
     * @param string $path
     *
     * @return $this
     */
    public function withPath($path)
    {
        $this->data['Path'] = $path;
        $this->options['query']['Path'] = $path;

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
}
