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
