<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * Api SetReqAuthConfig
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
class SetReqAuthConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';

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
