<?php

namespace AlibabaCloud\Cdn\V20180510;

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
    public $version = '2018-05-10';

    /**
     * @var string
     */
    public $action = 'SetCcConfig';

    /**
     * @var string
     */
    public $method = 'POST';

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
