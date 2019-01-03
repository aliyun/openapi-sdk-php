<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeEthereumNodeConfiguration
 *
 * @method string getNodeId()
 */
class DescribeEthereumNodeConfiguration extends RpcRequest
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
    public $action = 'DescribeEthereumNodeConfiguration';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withNodeId() instead.
     *
     * @param string $nodeId
     *
     * @return $this
     */
    public function setNodeId($nodeId)
    {
        return $this->withNodeId($nodeId);
    }

    /**
     * @param string $nodeId
     *
     * @return $this
     */
    public function withNodeId($nodeId)
    {
        $this->data['NodeId'] = $nodeId;
        $this->options['query']['NodeId'] = $nodeId;

        return $this;
    }
}
