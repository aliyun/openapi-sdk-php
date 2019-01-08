<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetForceRedirectConfig
 *
 * @method string getSecurityToken()
 * @method string getDomainName()
 * @method string getRedirectType()
 * @method string getOwnerId()
 */
class SetForceRedirectConfig extends RpcRequest
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
    public $action = 'SetForceRedirectConfig';

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
     * @param string $redirectType
     *
     * @return $this
     */
    public function withRedirectType($redirectType)
    {
        $this->data['RedirectType'] = $redirectType;
        $this->options['query']['RedirectType'] = $redirectType;

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
