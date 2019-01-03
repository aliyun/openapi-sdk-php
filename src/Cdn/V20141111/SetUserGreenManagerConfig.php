<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetUserGreenManagerConfig
 *
 * @method string getSecurityToken()
 * @method string getQuota()
 * @method string getOwnerId()
 * @method string getRatio()
 */
class SetUserGreenManagerConfig extends RpcRequest
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
    public $action = 'SetUserGreenManagerConfig';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withQuota() instead.
     *
     * @param string $quota
     *
     * @return $this
     */
    public function setQuota($quota)
    {
        return $this->withQuota($quota);
    }

    /**
     * @param string $quota
     *
     * @return $this
     */
    public function withQuota($quota)
    {
        $this->data['Quota'] = $quota;
        $this->options['query']['Quota'] = $quota;

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
     * @deprecated deprecated since version 2.0, Use withRatio() instead.
     *
     * @param string $ratio
     *
     * @return $this
     */
    public function setRatio($ratio)
    {
        return $this->withRatio($ratio);
    }

    /**
     * @param string $ratio
     *
     * @return $this
     */
    public function withRatio($ratio)
    {
        $this->data['Ratio'] = $ratio;
        $this->options['query']['Ratio'] = $ratio;

        return $this;
    }
}
