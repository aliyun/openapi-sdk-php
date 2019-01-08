<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryEthereumDeletable
 *
 * @method string getEthereumId()
 */
class QueryEthereumDeletable extends RpcRequest
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
    public $action = 'QueryEthereumDeletable';

    /**
     * @var string
     */
    public $method = 'POST';

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
