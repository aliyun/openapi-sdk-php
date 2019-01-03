<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddLocalNodes
 *
 * @method string getNodes()
 * @method string getClusterId()
 */
class AddLocalNodes extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EHPC';

    /**
     * @var string
     */
    public $version = '2018-04-12';

    /**
     * @var string
     */
    public $action = 'AddLocalNodes';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @deprecated deprecated since version 2.0, Use withNodes() instead.
     *
     * @param string $nodes
     *
     * @return $this
     */
    public function setNodes($nodes)
    {
        return $this->withNodes($nodes);
    }

    /**
     * @param string $nodes
     *
     * @return $this
     */
    public function withNodes($nodes)
    {
        $this->data['Nodes'] = $nodes;
        $this->options['query']['Nodes'] = $nodes;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withClusterId() instead.
     *
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        return $this->withClusterId($clusterId);
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function withClusterId($clusterId)
    {
        $this->data['ClusterId'] = $clusterId;
        $this->options['query']['ClusterId'] = $clusterId;

        return $this;
    }
}
