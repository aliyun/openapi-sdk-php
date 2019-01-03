<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetReqAuthConfig
 *
 * @method string getKey1()
 * @method string getKey2()
 * @method string getAuthRemoteDesc()
 * @method string getSecurityToken()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getTimeOut()
 * @method string getAuthType()
 */
class SetReqAuthConfig extends RpcRequest
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
    public $action = 'SetReqAuthConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withKey1() instead.
     *
     * @param string $key1
     *
     * @return $this
     */
    public function setKey1($key1)
    {
        return $this->withKey1($key1);
    }

    /**
     * @param string $key1
     *
     * @return $this
     */
    public function withKey1($key1)
    {
        $this->data['Key1'] = $key1;
        $this->options['query']['Key1'] = $key1;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withKey2() instead.
     *
     * @param string $key2
     *
     * @return $this
     */
    public function setKey2($key2)
    {
        return $this->withKey2($key2);
    }

    /**
     * @param string $key2
     *
     * @return $this
     */
    public function withKey2($key2)
    {
        $this->data['Key2'] = $key2;
        $this->options['query']['Key2'] = $key2;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAuthRemoteDesc() instead.
     *
     * @param string $authRemoteDesc
     *
     * @return $this
     */
    public function setAuthRemoteDesc($authRemoteDesc)
    {
        return $this->withAuthRemoteDesc($authRemoteDesc);
    }

    /**
     * @param string $authRemoteDesc
     *
     * @return $this
     */
    public function withAuthRemoteDesc($authRemoteDesc)
    {
        $this->data['AuthRemoteDesc'] = $authRemoteDesc;
        $this->options['query']['AuthRemoteDesc'] = $authRemoteDesc;

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
     * @deprecated deprecated since version 2.0, Use withTimeOut() instead.
     *
     * @param string $timeOut
     *
     * @return $this
     */
    public function setTimeOut($timeOut)
    {
        return $this->withTimeOut($timeOut);
    }

    /**
     * @param string $timeOut
     *
     * @return $this
     */
    public function withTimeOut($timeOut)
    {
        $this->data['TimeOut'] = $timeOut;
        $this->options['query']['TimeOut'] = $timeOut;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAuthType() instead.
     *
     * @param string $authType
     *
     * @return $this
     */
    public function setAuthType($authType)
    {
        return $this->withAuthType($authType);
    }

    /**
     * @param string $authType
     *
     * @return $this
     */
    public function withAuthType($authType)
    {
        $this->data['AuthType'] = $authType;
        $this->options['query']['AuthType'] = $authType;

        return $this;
    }
}
