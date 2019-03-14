<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * Api UpdateEthereumNode
 *
 * @method string getNodeName()
 * @method string getDescription()
 * @method string getNodeId()
 */
class UpdateEthereumNode extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';

    /**
     * @param string $nodeName
     *
     * @return $this
     */
    public function withNodeName($nodeName)
    {
        $this->data['NodeName'] = $nodeName;
        $this->options['query']['NodeName'] = $nodeName;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

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
}
