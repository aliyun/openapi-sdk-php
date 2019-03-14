<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * Api AddLocalNodes
 *
 * @method string getNodes()
 * @method string getClusterId()
 */
class AddLocalNodes extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';

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
