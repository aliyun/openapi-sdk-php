<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetCcConfig
 *
 * @method string getAllowIps()
 * @method string getSecurityToken()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getBlockIps()
 */
class SetCcConfig extends RpcRequest
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
    public $action = 'SetCcConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withAllowIps() instead.
     *
     * @param string $allowIps
     *
     * @return $this
     */
    public function setAllowIps($allowIps)
    {
        return $this->withAllowIps($allowIps);
    }

    /**
     * @param string $allowIps
     *
     * @return $this
     */
    public function withAllowIps($allowIps)
    {
        $this->data['AllowIps'] = $allowIps;
        $this->options['query']['AllowIps'] = $allowIps;

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
     * @deprecated deprecated since version 2.0, Use withBlockIps() instead.
     *
     * @param string $blockIps
     *
     * @return $this
     */
    public function setBlockIps($blockIps)
    {
        return $this->withBlockIps($blockIps);
    }

    /**
     * @param string $blockIps
     *
     * @return $this
     */
    public function withBlockIps($blockIps)
    {
        $this->data['BlockIps'] = $blockIps;
        $this->options['query']['BlockIps'] = $blockIps;

        return $this;
    }
}
