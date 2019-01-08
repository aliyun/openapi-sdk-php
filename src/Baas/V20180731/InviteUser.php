<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InviteUser
 *
 * @method string getBizid()
 * @method string getBid()
 * @method string getUserId()
 * @method string getUserEmail()
 */
class InviteUser extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Baas';

    /**
     * @var string
     */
    public $version = '2018-07-31';

    /**
     * @var string
     */
    public $action = 'InviteUser';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $bizid
     *
     * @return $this
     */
    public function withBizid($bizid)
    {
        $this->data['Bizid'] = $bizid;
        $this->options['query']['Bizid'] = $bizid;

        return $this;
    }

    /**
     * @param string $bid
     *
     * @return $this
     */
    public function withBid($bid)
    {
        $this->data['Bid'] = $bid;
        $this->options['query']['Bid'] = $bid;

        return $this;
    }

    /**
     * @param string $userId
     *
     * @return $this
     */
    public function withUserId($userId)
    {
        $this->data['UserId'] = $userId;
        $this->options['query']['UserId'] = $userId;

        return $this;
    }

    /**
     * @param string $userEmail
     *
     * @return $this
     */
    public function withUserEmail($userEmail)
    {
        $this->data['UserEmail'] = $userEmail;
        $this->options['query']['UserEmail'] = $userEmail;

        return $this;
    }
}
