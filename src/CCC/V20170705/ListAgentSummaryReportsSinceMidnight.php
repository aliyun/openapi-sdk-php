<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListAgentSummaryReportsSinceMidnight
 *
 * @method string getAgentIds()
 * @method string getInstanceId()
 * @method string getSkillGroupId()
 * @method string getPageSize()
 * @method string getPageNumber()
 */
class ListAgentSummaryReportsSinceMidnight extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CCC';

    /**
     * @var string
     */
    public $version = '2017-07-05';

    /**
     * @var string
     */
    public $action = 'ListAgentSummaryReportsSinceMidnight';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @param string $agentIds
     *
     * @return $this
     */
    public function withAgentIds($agentIds)
    {
        $this->data['AgentIds'] = $agentIds;
        $this->options['query']['AgentIds'] = $agentIds;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $skillGroupId
     *
     * @return $this
     */
    public function withSkillGroupId($skillGroupId)
    {
        $this->data['SkillGroupId'] = $skillGroupId;
        $this->options['query']['SkillGroupId'] = $skillGroupId;

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
