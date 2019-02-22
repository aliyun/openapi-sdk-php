<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddEthereumNode
 *
 * @method string getNodeName()
 * @method string getDescription()
 * @method string getId()
 * @method string getExternalNode()
 */
class AddEthereumNode extends RpcRequest
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
    public $action = 'AddEthereumNode';

    /**
     * @var string
     */
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
     * @param string $id
     *
     * @return $this
     */
    public function withId($id)
    {
        $this->data['Id'] = $id;
        $this->options['query']['Id'] = $id;

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
