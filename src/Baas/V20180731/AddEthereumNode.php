<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * Api AddEthereumNode
 *
 * @method string getNodeName()
 * @method string getEthereumId()
 * @method string getDescription()
 * @method string getExternalNode()
 */
class AddEthereumNode extends Rpc
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
     * @param string $externalNode
     *
     * @return $this
     */
    public function withExternalNode($externalNode)
    {
        $this->data['ExternalNode'] = $externalNode;
        $this->options['query']['ExternalNode'] = $externalNode;

        return $this;
    }
}
