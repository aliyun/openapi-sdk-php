<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of NodeStatusList
 *
 * @method string getInstanceIds()
 */
class NodeStatusList extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cms';

    /**
     * @var string
     */
    public $version = '2018-03-08';

    /**
     * @var string
     */
    public $action = 'NodeStatusList';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $instanceIds
     *
     * @return $this
     */
    public function withInstanceIds($instanceIds)
    {
        $this->data['InstanceIds'] = $instanceIds;
        $this->options['query']['InstanceIds'] = $instanceIds;

        return $this;
    }
}
