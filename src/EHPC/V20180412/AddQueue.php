<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * Api AddQueue
 *
 * @method string getQueueName()
 * @method string getClusterId()
 */
class AddQueue extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

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
