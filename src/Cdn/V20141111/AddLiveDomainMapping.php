<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddLiveDomainMapping
 *
 * @method string getPullDomain()
 * @method string getSecurityToken()
 * @method string getPushDomain()
 * @method string getOwnerId()
 */
class AddLiveDomainMapping extends RpcRequest
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
    public $action = 'AddLiveDomainMapping';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $pullDomain
     *
     * @return $this
     */
    public function withPullDomain($pullDomain)
    {
        $this->data['PullDomain'] = $pullDomain;
        $this->options['query']['PullDomain'] = $pullDomain;

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
     * @param string $pushDomain
     *
     * @return $this
     */
    public function withPushDomain($pushDomain)
    {
        $this->data['PushDomain'] = $pushDomain;
        $this->options['query']['PushDomain'] = $pushDomain;

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
