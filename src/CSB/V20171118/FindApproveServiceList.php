<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Rpc;

/**
 * Api FindApproveServiceList
 *
 * @method string getProjectName()
 * @method string getApproveLevel()
 * @method string getShowDelService()
 * @method string getCsbId()
 * @method string getAlias()
 * @method string getServiceName()
 */
class FindApproveServiceList extends Rpc
{
    public $product = 'CSB';

    public $version = '2017-11-18';

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
}
