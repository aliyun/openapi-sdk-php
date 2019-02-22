<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetQueue
 *
 * @method string getQueueName()
 * @method array getNode()
 * @method string getClusterId()
 */
class SetQueue extends RpcRequest
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
    public $action = 'SetQueue';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @param string $queueName
     *
     * @return $this
     */
    public function withQueueName($queueName)
    {
        $this->data['QueueName'] = $queueName;
        $this->options['query']['QueueName'] = $queueName;

        return $this;
    }

    /**
     * @param array $node
     *
     * @return $this
     */
    public function withNode(array $node)
    {
        $this->data['Node'] = $node;
        foreach ($node as $i => $iValue) {
            $this->options['query']['Node.' . ($i + 1) . '.Name'] = $node[$i]['Name'];
        }

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
