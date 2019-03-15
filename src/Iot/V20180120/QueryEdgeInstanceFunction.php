<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getInstanceId()
 * @method string getFunctionName()
 * @method string getPageSize()
 * @method string getCurrentPage()
 */
class QueryEdgeInstanceFunction extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Iot';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'QueryEdgeInstanceFunction';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId']             = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $functionName
     *
     * @return $this
     */
    public function withFunctionName($functionName)
    {
        $this->data['FunctionName']             = $functionName;
        $this->options['query']['FunctionName'] = $functionName;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize']             = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $currentPage
     *
     * @return $this
     */
    public function withCurrentPage($currentPage)
    {
        $this->data['CurrentPage']             = $currentPage;
        $this->options['query']['CurrentPage'] = $currentPage;

        return $this;
    }
}
