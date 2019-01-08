<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeTransaction
 *
 * @method string getBizid()
 * @method string getHash()
 */
class DescribeTransaction extends RpcRequest
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
    public $action = 'DescribeTransaction';

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
     * @param string $hash
     *
     * @return $this
     */
    public function withHash($hash)
    {
        $this->data['Hash'] = $hash;
        $this->options['query']['Hash'] = $hash;

        return $this;
    }
}
