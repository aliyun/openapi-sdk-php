<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListInvocationResults
 *
 * @method array getInstance()
 * @method string getInvokeRecordStatus()
 * @method string getPageSize()
 * @method string getClusterId()
 * @method string getCommandId()
 * @method string getPageNumber()
 */
class ListInvocationResults extends RpcRequest
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
    public $action = 'ListInvocationResults';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @deprecated deprecated since version 2.0, Use getInstance() instead.
     *
     * @return array
     */
    public function getInstances()
    {
        return $this->getInstance();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInstance() instead.
     *
     * @param array $instances
     *
     * @return $this
     */
    public function setInstances(array $instances)
    {
        return $this->withInstance($instances);
    }

    /**
     * @param array $instance
     *
     * @return $this
     */
    public function withInstance(array $instance)
    {
        $this->data['Instance'] = $instance;
        foreach ($instance as $i => $iValue) {
            $this->options['query']['Instance.' . ($i + 1) . '.Id'] = $instance[$i]['Id'];
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInvokeRecordStatus() instead.
     *
     * @param string $invokeRecordStatus
     *
     * @return $this
     */
    public function setInvokeRecordStatus($invokeRecordStatus)
    {
        return $this->withInvokeRecordStatus($invokeRecordStatus);
    }

    /**
     * @param string $invokeRecordStatus
     *
     * @return $this
     */
    public function withInvokeRecordStatus($invokeRecordStatus)
    {
        $this->data['InvokeRecordStatus'] = $invokeRecordStatus;
        $this->options['query']['InvokeRecordStatus'] = $invokeRecordStatus;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
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

    /**
     * @deprecated deprecated since version 2.0, Use withCommandId() instead.
     *
     * @param string $commandId
     *
     * @return $this
     */
    public function setCommandId($commandId)
    {
        return $this->withCommandId($commandId);
    }

    /**
     * @param string $commandId
     *
     * @return $this
     */
    public function withCommandId($commandId)
    {
        $this->data['CommandId'] = $commandId;
        $this->options['query']['CommandId'] = $commandId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPageNumber() instead.
     *
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        return $this->withPageNumber($pageNumber);
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
