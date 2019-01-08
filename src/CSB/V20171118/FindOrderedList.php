<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of FindOrderedList
 *
 * @method string getProjectName()
 * @method string getShowDelOrder()
 * @method string getCsbId()
 * @method string getAlias()
 * @method string getServiceName()
 * @method string getPageNum()
 * @method string getServiceId()
 * @method string getStatus()
 */
class FindOrderedList extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CSB';

    /**
     * @var string
     */
    public $version = '2017-11-18';

    /**
     * @var string
     */
    public $action = 'FindOrderedList';

    /**
     * @var string
     */
    public $scheme = 'https';

    /**
     * @param string $projectName
     *
     * @return $this
     */
    public function withProjectName($projectName)
    {
        $this->data['ProjectName'] = $projectName;
        $this->options['query']['ProjectName'] = $projectName;

        return $this;
    }

    /**
     * @param string $showDelOrder
     *
     * @return $this
     */
    public function withShowDelOrder($showDelOrder)
    {
        $this->data['ShowDelOrder'] = $showDelOrder;
        $this->options['query']['ShowDelOrder'] = $showDelOrder;

        return $this;
    }

    /**
     * @param string $csbId
     *
     * @return $this
     */
    public function withCsbId($csbId)
    {
        $this->data['CsbId'] = $csbId;
        $this->options['query']['CsbId'] = $csbId;

        return $this;
    }

    /**
     * @param string $alias
     *
     * @return $this
     */
    public function withAlias($alias)
    {
        $this->data['Alias'] = $alias;
        $this->options['query']['Alias'] = $alias;

        return $this;
    }

    /**
     * @param string $serviceName
     *
     * @return $this
     */
    public function withServiceName($serviceName)
    {
        $this->data['ServiceName'] = $serviceName;
        $this->options['query']['ServiceName'] = $serviceName;

        return $this;
    }

    /**
     * @param string $pageNum
     *
     * @return $this
     */
    public function withPageNum($pageNum)
    {
        $this->data['PageNum'] = $pageNum;
        $this->options['query']['PageNum'] = $pageNum;

        return $this;
    }

    /**
     * @param string $serviceId
     *
     * @return $this
     */
    public function withServiceId($serviceId)
    {
        $this->data['ServiceId'] = $serviceId;
        $this->options['query']['ServiceId'] = $serviceId;

        return $this;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function withStatus($status)
    {
        $this->data['Status'] = $status;
        $this->options['query']['Status'] = $status;

        return $this;
    }
}
