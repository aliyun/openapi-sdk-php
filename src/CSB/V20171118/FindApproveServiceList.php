<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of FindApproveServiceList
 *
 * @method string getProjectName()
 * @method string getApproveLevel()
 * @method string getShowDelService()
 * @method string getCsbId()
 * @method string getAlias()
 * @method string getServiceName()
 */
class FindApproveServiceList extends RpcRequest
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
    public $action = 'FindApproveServiceList';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @deprecated deprecated since version 2.0, Use withProjectName() instead.
     *
     * @param string $projectName
     *
     * @return $this
     */
    public function setProjectName($projectName)
    {
        return $this->withProjectName($projectName);
    }

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
     * @deprecated deprecated since version 2.0, Use withApproveLevel() instead.
     *
     * @param string $approveLevel
     *
     * @return $this
     */
    public function setApproveLevel($approveLevel)
    {
        return $this->withApproveLevel($approveLevel);
    }

    /**
     * @param string $approveLevel
     *
     * @return $this
     */
    public function withApproveLevel($approveLevel)
    {
        $this->data['ApproveLevel'] = $approveLevel;
        $this->options['query']['ApproveLevel'] = $approveLevel;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withShowDelService() instead.
     *
     * @param string $showDelService
     *
     * @return $this
     */
    public function setShowDelService($showDelService)
    {
        return $this->withShowDelService($showDelService);
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
     * @deprecated deprecated since version 2.0, Use withCsbId() instead.
     *
     * @param string $csbId
     *
     * @return $this
     */
    public function setCsbId($csbId)
    {
        return $this->withCsbId($csbId);
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
     * @deprecated deprecated since version 2.0, Use withAlias() instead.
     *
     * @param string $alias
     *
     * @return $this
     */
    public function setAlias($alias)
    {
        return $this->withAlias($alias);
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
     * @deprecated deprecated since version 2.0, Use withServiceName() instead.
     *
     * @param string $serviceName
     *
     * @return $this
     */
    public function setServiceName($serviceName)
    {
        return $this->withServiceName($serviceName);
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
}
