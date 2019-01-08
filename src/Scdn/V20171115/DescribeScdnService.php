<?php

namespace AlibabaCloud\Scdn\V20171115;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeScdnService
 *
 * @method string getSecurityToken()
 * @method string getOwnerId()
 */
class DescribeScdnService extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'scdn';

    /**
     * @var string
     */
    public $version = '2017-11-15';

    /**
     * @var string
     */
    public $action = 'DescribeScdnService';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'scdn';

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
