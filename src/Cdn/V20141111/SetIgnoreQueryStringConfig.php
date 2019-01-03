<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetIgnoreQueryStringConfig
 *
 * @method string getKeepOssArgs()
 * @method string getHashKeyArgs()
 * @method string getSecurityToken()
 * @method string getEnable()
 * @method string getDomainName()
 * @method string getOwnerId()
 */
class SetIgnoreQueryStringConfig extends RpcRequest
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
    public $action = 'SetIgnoreQueryStringConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withKeepOssArgs() instead.
     *
     * @param string $keepOssArgs
     *
     * @return $this
     */
    public function setKeepOssArgs($keepOssArgs)
    {
        return $this->withKeepOssArgs($keepOssArgs);
    }

    /**
     * @param string $keepOssArgs
     *
     * @return $this
     */
    public function withKeepOssArgs($keepOssArgs)
    {
        $this->data['KeepOssArgs'] = $keepOssArgs;
        $this->options['query']['KeepOssArgs'] = $keepOssArgs;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withHashKeyArgs() instead.
     *
     * @param string $hashKeyArgs
     *
     * @return $this
     */
    public function setHashKeyArgs($hashKeyArgs)
    {
        return $this->withHashKeyArgs($hashKeyArgs);
    }

    /**
     * @param string $hashKeyArgs
     *
     * @return $this
     */
    public function withHashKeyArgs($hashKeyArgs)
    {
        $this->data['HashKeyArgs'] = $hashKeyArgs;
        $this->options['query']['HashKeyArgs'] = $hashKeyArgs;

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
     * @deprecated deprecated since version 2.0, Use withEnable() instead.
     *
     * @param string $enable
     *
     * @return $this
     */
    public function setEnable($enable)
    {
        return $this->withEnable($enable);
    }

    /**
     * @param string $enable
     *
     * @return $this
     */
    public function withEnable($enable)
    {
        $this->data['Enable'] = $enable;
        $this->options['query']['Enable'] = $enable;

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
}
