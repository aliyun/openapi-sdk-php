<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListRecordings
 *
 * @method string getAgentId()
 * @method string getInstanceId()
 * @method string getCriteria()
 * @method string getPhoneNumber()
 * @method string getPageSize()
 * @method string getStopTime()
 * @method string getStartTime()
 * @method string getPageNumber()
 */
class ListRecordings extends RpcRequest
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
    public $action = 'ListRecordings';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @param string $agentId
     *
     * @return $this
     */
    public function withAgentId($agentId)
    {
        $this->data['AgentId'] = $agentId;
        $this->options['query']['AgentId'] = $agentId;

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
     * @param string $criteria
     *
     * @return $this
     */
    public function withCriteria($criteria)
    {
        $this->data['Criteria'] = $criteria;
        $this->options['query']['Criteria'] = $criteria;

        return $this;
    }

    /**
     * @param string $phoneNumber
     *
     * @return $this
     */
    public function withPhoneNumber($phoneNumber)
    {
        $this->data['PhoneNumber'] = $phoneNumber;
        $this->options['query']['PhoneNumber'] = $phoneNumber;

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
     * @param string $stopTime
     *
     * @return $this
     */
    public function withStopTime($stopTime)
    {
        $this->data['StopTime'] = $stopTime;
        $this->options['query']['StopTime'] = $stopTime;

        return $this;
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function withStartTime($startTime)
    {
        $this->data['StartTime'] = $startTime;
        $this->options['query']['StartTime'] = $startTime;

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
