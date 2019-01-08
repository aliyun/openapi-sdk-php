<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of FindServiceList
 *
 * @method string getProjectName()
 * @method string getShowDelService()
 * @method string getCasShowType()
 * @method string getCsbId()
 * @method string getAlias()
 * @method string getServiceName()
 * @method string getPageNum()
 */
class FindServiceList extends RpcRequest
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
    public $action = 'FindServiceList';

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
     * @param string $showDelService
     *
     * @return $this
     */
    public function withShowDelService($showDelService)
    {
        $this->data['ShowDelService'] = $showDelService;
        $this->options['query']['ShowDelService'] = $showDelService;

        return $this;
    }

    /**
     * @param string $casShowType
     *
     * @return $this
     */
    public function withCasShowType($casShowType)
    {
        $this->data['CasShowType'] = $casShowType;
        $this->options['query']['CasShowType'] = $casShowType;

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
}
