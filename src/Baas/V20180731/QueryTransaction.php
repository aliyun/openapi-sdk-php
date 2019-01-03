<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryTransaction
 *
 * @method string getBizid()
 * @method string getHash()
 */
class QueryTransaction extends RpcRequest
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
    public $action = 'QueryTransaction';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withBizid() instead.
     *
     * @param string $bizid
     *
     * @return $this
     */
    public function setBizid($bizid)
    {
        return $this->withBizid($bizid);
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
     * @deprecated deprecated since version 2.0, Use withHash() instead.
     *
     * @param string $hash
     *
     * @return $this
     */
    public function setHash($hash)
    {
        return $this->withHash($hash);
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
