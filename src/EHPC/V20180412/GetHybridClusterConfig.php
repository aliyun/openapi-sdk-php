<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetHybridClusterConfig
 *
 * @method string getNode()
 * @method string getClusterId()
 */
class GetHybridClusterConfig extends RpcRequest
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
    public $action = 'GetHybridClusterConfig';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @param string $node
     *
     * @return $this
     */
    public function withNode($node)
    {
        $this->data['Node'] = $node;
        $this->options['query']['Node'] = $node;

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
