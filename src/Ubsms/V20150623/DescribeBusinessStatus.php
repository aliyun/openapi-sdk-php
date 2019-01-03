<?php

namespace AlibabaCloud\Ubsms\V20150623;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeBusinessStatus
 *
 * @method string getPassword()
 * @method string getCallerBid()
 */
class DescribeBusinessStatus extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ubsms';

    /**
     * @var string
     */
    public $version = '2015-06-23';

    /**
     * @var string
     */
    public $action = 'DescribeBusinessStatus';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withPassword() instead.
     *
     * @param string $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        return $this->withPassword($password);
    }

    /**
     * @param string $password
     *
     * @return $this
     */
    public function withPassword($password)
    {
        $this->data['Password'] = $password;
        $this->options['query']['Password'] = $password;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCallerBid() instead.
     *
     * @param string $callerBid
     *
     * @return $this
     */
    public function setcallerBid($callerBid)
    {
        return $this->withCallerBid($callerBid);
    }

    /**
     * @param string $callerBid
     *
     * @return $this
     */
    public function withCallerBid($callerBid)
    {
        $this->data['CallerBid'] = $callerBid;
        $this->options['query']['callerBid'] = $callerBid;

        return $this;
    }
}
