<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeEthereumDeletable
 *
 * @method string getEthereumId()
 */
class DescribeEthereumDeletable extends RpcRequest
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
    public $action = 'DescribeEthereumDeletable';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withEthereumId() instead.
     *
     * @param string $ethereumId
     *
     * @return $this
     */
    public function setEthereumId($ethereumId)
    {
        return $this->withEthereumId($ethereumId);
    }

    /**
     * @param string $ethereumId
     *
     * @return $this
     */
    public function withEthereumId($ethereumId)
    {
        $this->data['EthereumId'] = $ethereumId;
        $this->options['query']['EthereumId'] = $ethereumId;

        return $this;
    }
}
