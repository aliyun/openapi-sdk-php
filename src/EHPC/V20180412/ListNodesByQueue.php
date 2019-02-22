<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListNodesByQueue
 *
 * @method string getQueueName()
 * @method string getPageSize()
 * @method string getClusterId()
 * @method string getPageNumber()
 */
class ListNodesByQueue extends RpcRequest
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
    public $action = 'ListNodesByQueue';

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
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

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

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function withPageNumber($pageNumber)
    {
        $this->data['PageNumber'] = $pageNumber;
        $this->options['query']['PageNumber'] = $pageNumber;

        return $this;
    }
}
