<?php

namespace AlibabaCloud\UbsmsInner\V20150623;

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
    public $product = 'Ubsms-inner';

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
