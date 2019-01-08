<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RejectUser
 *
 * @method string getReason()
 * @method string getBizid()
 * @method string getBid()
 * @method string getUserName()
 */
class RejectUser extends RpcRequest
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
    public $action = 'RejectUser';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $reason
     *
     * @return $this
     */
    public function withReason($reason)
    {
        $this->data['Reason'] = $reason;
        $this->options['query']['Reason'] = $reason;

        return $this;
    }

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
     * @param string $userName
     *
     * @return $this
     */
    public function withUserName($userName)
    {
        $this->data['UserName'] = $userName;
        $this->options['query']['UserName'] = $userName;

        return $this;
    }
}
