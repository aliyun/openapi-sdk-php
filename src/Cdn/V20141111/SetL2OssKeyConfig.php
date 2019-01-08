<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetL2OssKeyConfig
 *
 * @method string getSecurityToken()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getPrivateOssAuth()
 */
class SetL2OssKeyConfig extends RpcRequest
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
    public $action = 'SetL2OssKeyConfig';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @param string $privateOssAuth
     *
     * @return $this
     */
    public function withPrivateOssAuth($privateOssAuth)
    {
        $this->data['PrivateOssAuth'] = $privateOssAuth;
        $this->options['query']['PrivateOssAuth'] = $privateOssAuth;

        return $this;
    }
}
