<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * Api DescribeEthereumNodeLogs
 *
 * @method string getLines()
 * @method string getNodeId()
 * @method string getTarget()
 */
class DescribeEthereumNodeLogs extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';

    /**
     * @param string $lines
     *
     * @return $this
     */
    public function withLines($lines)
    {
        $this->data['Lines'] = $lines;
        $this->options['query']['Lines'] = $lines;

        return $this;
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

    /**
     * @param string $target
     *
     * @return $this
     */
    public function withTarget($target)
    {
        $this->data['Target'] = $target;
        $this->options['query']['Target'] = $target;

        return $this;
    }
}
