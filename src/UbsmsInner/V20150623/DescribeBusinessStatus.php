<?php

namespace AlibabaCloud\UbsmsInner\V20150623;

use AlibabaCloud\Rpc;

/**
 * Api DescribeBusinessStatus
 *
 * @method string getPassword()
 * @method string getCallerBid()
 */
class DescribeBusinessStatus extends Rpc
{
    public $product = 'Ubsms-inner';

    public $version = '2015-06-23';

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
